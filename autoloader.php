<?php

function autoloader( string $class_name ): string
{
  $pathFile = search_file('.', $class_name);

  return require __DIR__ . "/" . $pathFile[0];
}

function search_file( $folderName, $fileName ) 
{
  $found = array();
  $folderName = rtrim($folderName, '/');
  $dir = opendir($folderName);

  // выбрасываем исключение + ошибку если $dir не открылась
  if (!$dir) {
    throw new Exception("Cannot open directory: $folderName");
  }

  while( ( $file = readdir( $dir )) !== false) {
    $file_path = "$folderName/$file";
    
    // вывод в консоль путей, по которым проводим поиск файлов
    echo $file_path . PHP_EOL;  

    if( $folderName == './.git' ) continue; // пропускаем все git
    if( $file == '.' || $file == '..' ) continue; // пропускаем все . и ..

    if( is_file( $file_path )) {
      if( strpos( $file, $fileName ) !==  false &&
          pathinfo($file_path, PATHINFO_EXTENSION) === 'php') { // дополнительно проверяет, что файл "php"
        $found[] = $file_path;
      }
    } elseif(is_dir( $file_path )) {
      $res = search_file( $file_path, $fileName );
      $found = array_merge( $found, $res );
    }
  }

  closedir($dir);
  return $found;
}