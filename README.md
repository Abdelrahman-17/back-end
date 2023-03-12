class ItemReader {
  private string $filename;
  private string $format;
  
  public function __construct(string $filename, string $format) {
    $this->filename = $filename;
    $this->format = $format;
  }

  public function readItems(): array {
    $items = [];
    $content = file_get_contents($this->filename);
    $getdata = new getData();
    $data = $getdata->getdata($content);
    
    foreach ($data as $element) {
      $item = new Item();
      $item->id = $element->id;
      $item->name = $element->elementName;
      $items[] = $item;
    }
    
    return $items;
  }
}

class getData {
  public function getdata($content) {
    // method implementation goes here
  }
}

class xmlformat extends getData {
  public function getdata($content) {
    return new xmlRead($content);
  }
}

class jsonformat extends getData {
  public function getdata($content) {
    return json_decode($content);
  }
}

class Item {
  public $id;
  public $name;
}
