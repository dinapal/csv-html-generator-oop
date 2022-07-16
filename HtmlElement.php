<?php

class HtmlElement {
    private $attributes = [];
    private $tag;

    public function __construct( $tag ) {
        $this->tag = $tag;
    }

    public function __set( $name, $value ) {
        $this->attributes[$name] = $value;
    }

    public function html( $innerHtml = '' ) {
        $html = "<{$this->tag}";

        foreach ( $this->attributes as $key => $value ) {
            $key = str_replace( "_", "-", $key );
            $html .= ' ' . $key . '="' . $value . '"';
        }

        $html .= ">";
        $html .= $innerHtml;
        $html .= "</{$this->tag}>";

        return $html;
    }

}

$div = new HtmlElement( "div" );

$div->id = "test";
$div->class = "testing class";
$div->data_id = "1";

echo $div->html( "This is Example HTML Elment!" );

$p = new HtmlElement( 'p' );
echo $p->html( "This is A P Element!" );
