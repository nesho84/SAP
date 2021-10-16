<?php
$pdf = '';

$html = '
<table class="table" border="1">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
';

if (function_exists('create_pdf')) {
    // Create PDF file
    $pdf = create_pdf($html, 'test1', false);
} else {
    require dirname(__DIR__) . "/library/PDF.php";
    $pdf = create_pdf($html, 'test1', false);
}


// Show in the iframe
echo '<iframe width="100%" height="700" frameborder="0" src="' . $pdf . '"></iframe>';
