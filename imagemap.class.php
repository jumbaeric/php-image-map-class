<?php
class ImageMapGenerator {
    private $areas = [];

    // Adds a rectangular clickable area to the image map. 
    // You provide the coordinates (x1, y1, x2, y2) of the top-left and bottom-right corners of the rectangle, 
    // along with the URL to which the user should be redirected when clicking the area.
    public function addArea($x1, $y1, $x2, $y2, $url) {
        $this->areas[] = [
            'x1' => $x1,
            'y1' => $y1,
            'x2' => $x2,
            'y2' => $y2,
            'url' => $url,
        ];
    }

    // Generates the HTML code for the image map. 
    // It takes the file path of the image as a parameter and returns the complete HTML code 
    // that includes the image and the map with defined areas.
    public function generateMap($imagePath) {
        $html = '<img src="' . $imagePath . '" usemap="#imagemap" alt="Image Map">';
        $html .= '<map name="imagemap">';

        foreach ($this->areas as $area) {
            $html .= '<area shape="rect" coords="' . $area['x1'] . ',' . $area['y1'] . ',' . $area['x2'] . ',' . $area['y2'] . '" href="' . $area['url'] . '">';
        }

        $html .= '</map>';

        return $html;
    }
}