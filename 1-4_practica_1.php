// Продуктом являются жилые дома, квартиры
class HomeShop {
    private $itemAdress;      // Адрес 
    private $itemDescription; // Описание
    private $price;           // Цена
     
    public function __construct($itemAdress, $itemDescription, $price) {
         $this->itemAdress = $itemAdress;
         $this->itemDescription = $itemDescription;
         $this->price = $price;
    }
     
    public function getItemAdress() {
         return $this->itemAdress;
    }

    public function getItemDescription() {
         return $this->itemDescription;
    }

    public function getPrice() {
         return $this->price;
    }

    protected getInfo() {
            return 'Adress: '.$this->itemAdress.'<br>'.
                   'Description: '.$this->itemDescription.'<br>'.
                   'Price: '.$this->price.'<br>';      
    }
}

class HomeProduct extends HomeShop {
    private $typeHome;        // Тип дома: блочный, кирпичный и т.д.
     
    public function __construct($itemAdress, $itemDescription, $price, $typeHome) {
         parent::__construct($itemAdress, $itemDescription, $price) {
         $this->typeHome = $typeHome;
    }
  
    public function getInfo() {
         return parent::getInfo(). 'type home: '.$this->typeHome.'<br>';
    }
}

$home = new HomeProduct('г.Москва, ул.Арбат, д.17, кв. 13', 'Элитное жилье', '1000000', 'Кирпичный'); 
echo $home->getInfo();