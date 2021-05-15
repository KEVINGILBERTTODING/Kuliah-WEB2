<?php
class Form
{
    var $fields = array();
    var $action;
    var $submit = "Submit Form";
    var $jumField = 0;
    function __construct($action, $submit)
    {
        $this->action = $action;
        $this->submit = $submit;
    }
    function displayForm()
    {
        echo "<form action='" . $this->action . "' method='POST'>";
        echo "<table width='100%'>";
        for (
            $j = 0;
            $j < count($this->fields);
            $j++
        ) {
            echo "<tr><td align='right'>" . $this->fields[$j]['label'] . "</td>";
            echo "<td><input type='text' name='" . $this->fields[$j]['name'] . "'></td></tr>";
        }
        echo "<tr><td colspan='2'>";
        echo "<input type='submit' value='" . $this->submit . "'></td></tr>";
        echo "</table>";
    }
    function addField($name, $label)
    {
        $this->fields[$this->jumField]['name'] = $name;
        $this->fields[$this->jumField]['label'] = $label;
        $this->jumField++;
    }
}
