```php
<?php

class Article{

    private $title;
  
    public function __construct(string $title){
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle(string $title) : string{
        $this->title = $title;
    }
}

class ArticleFactory{
    public static function create($title) : Article{
        return new Article($title);
    }
}

class ArticleManager implements SplSubject{

    // SplSubject = L'objet qui est observé!

    // 3 méthodes : - Attach() détach() notify()

    private $article;

    // Créeation d'observers
    protected $observers;

    public function __construct(){
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer){
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer){
        $this->observers->detach($observer);
    }

    public function notify(){
        foreach($this->observers as $observer){
            $observer->update($this);
        }
    }

    public function create(Article $article){
        $this->article = $article;

        echo "L'article a été envoyé en base de données";

        $this->notify();
    }

    public function getArticle(){
        return $this->article;
    }

}


class Notify implements SplObserver{
    
    public function update(SplSubject $subject){
        echo "La classe Notify a été alerté. L'article " . $subject->getArticle()->getTitle(). ' a été crée!';
    }
}

```