# Simple PHP Imagemap Class
This is a simple PHP class that generates an HTML image map. An image map allows you to define clickable areas on an image, and when users click on those areas, they are redirected to specific URLs. In this example, I'll create a basic class that allows you to add rectangular clickable areas to an image.

## The ImageMapGenerator class has two methods:

**addArea**: Adds a rectangular clickable area to the image map. You provide the coordinates (x1, y1, x2, y2) of the top-left and bottom-right corners of the rectangle, along with the URL to which the user should be redirected when clicking the area.

**generateMap**: Generates the HTML code for the image map. It takes the file path of the image as a parameter and returns the complete HTML code that includes the image and the map with defined areas.

// Example usage:
`
$imageMapGenerator = new ImageMapGenerator();
$imageMapGenerator->addArea(10, 20, 100, 80, 'https://example.com/link1');
$imageMapGenerator->addArea(120, 30, 180, 90, 'https://example.com/link2');

$imagePath = 'path/to/your/image.jpg';
$imageMapHtml = $imageMapGenerator->generateMap($imagePath);

echo $imageMapHtml;
`