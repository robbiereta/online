<?php

require '../vendor/autoload.php';
$htmlString = '<table>
                  <tr>
                      <td>Hello World</td>
                  </tr>
                  <tr>
                      <td>Hello<br />World</td>
                  </tr>
                  <tr>
                      <td>Hello<br>World</td>
                  </tr>
              </table>';

$reader = new \PhpOffice\PhpSpreadsheet\Reader\Html();
$spreadsheet = $reader->loadFromString($htmlString);

$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xls');
$writer->save('write.xls'); 