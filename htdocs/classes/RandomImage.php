<?php
/**
 * Sources image data from an external JSON file for use on the homepage
 * of the Integrated Solutions website.
 *
 * @author Kyle Vermeulen <kyle@fishgate.co.za>
 */

class RandomImage {
    
    private $json_string;
    private $img_data;
    private $img_size;
    private $imgs_src;
    private $shuffledItems;
    
    /**
     * Prepares an array ready to work with in PHP from the JSON
     * string specified.
     * 
     * @param string $data_file Path to the JSON file holding the image data
     * 
     */
    public function __construct($data_file) {
        $this->json_string = file_get_contents($data_file);
        $this->img_data = json_decode($this->json_string, true);
    }
    
    /**
     * 
     * Isolates the image size we are going to be working with from 
     * the array and populates the items into a new shuffled array. 
     * 
     * @param string $size The image size you wish to source accepts 'large' or 'small'
     * 
     */
    public function prepareArray($size){
        $this->img_size = $size;
        
        switch ($this->img_size) {
            case 'small':
                $this->imgs_src = $this->img_data['small'];
                break;
            case 'large':
                $this->imgs_src = $this->img_data['large'];
                break;
        }
        
        $this->shuffledItems = array();
        
        foreach($this->imgs_src as $value){
            array_push($this->shuffledItems, $value);
        }
        
        shuffle($this->shuffledItems);
        
        return $this->shuffledItems;
    }
}

