<?php
$place = trim(strip_tags($_POST['shkafPlace'])); //В какой комнате разместить
$contain = implode(',', $_POST['ZshkafContain']); // массив Что будет хранится в шкафу
$dt = date("Y-m-d H:i:s"); // Вывод даты и времени
$typeOfFurnityre = implode(',', $_POST['OffType']);
$type = trim(strip_tags($_POST['officeType'])); // Тип шкафа купе
$deep= trim(strip_tags($_POST['deep'])); // Глубина шкафа
$height = trim(strip_tags($_POST['height'])); // Высота шкафа
$width =trim(strip_tags($_POST['width'])); // Ширина шкафа
$cover = implode(',', $_POST['ZshkafCover']); // Наполнение дверей купе
$terms = implode(',', $_POST['Zdopusloviya']); //Доп условия
$name = trim(strip_tags($_POST['name']));
$phone =  trim(strip_tags($_POST['phone']));
$utm = trim(strip_tags($_POST['utm']));
$tableAmount = trim(strip_tags($_POST['table']));
$armchairAmount = trim(strip_tags($_POST['armchair']));
$sofaAmount = trim(strip_tags($_POST['sofa']));
$nightstandAmount = trim(strip_tags($_POST['nightstand']));
$closetAmount = trim(strip_tags($_POST['closet']));
$kitchenAmount = trim(strip_tags($_POST['kitchen']));
$shoemakerAmount = trim(strip_tags($_POST['shoemaker']));
$hangerAmount = trim(strip_tags($_POST['hanger']));
$partitionAmount = trim(strip_tags($_POST['partition']));
$otherAdditional = trim(strip_tags($_POST['otherAdditional']));
$tableWidth = trim(strip_tags($_POST['table_width']));
$tableHeight = trim(strip_tags($_POST['table_height']));
$tableDeep = trim(strip_tags($_POST['table_deep']));
$armchairWidth = trim(strip_tags($_POST['kreslo_width']));
$armchairHeight = trim(strip_tags($_POST['kreslo_height']));
$armchairDeep = trim(strip_tags($_POST['kreslo_deep']));
$sofaWidth = trim(strip_tags($_POST['sofa_width']));
$sofaHeight = trim(strip_tags($_POST['sofa_height']));
$sofaDeep = trim(strip_tags($_POST['sofa_deep']));
$tumbaWidth = trim(strip_tags($_POST['tumba_width']));
$tumbaHeight = trim(strip_tags($_POST['tumba_height']));
$tumbaDeep = trim(strip_tags($_POST['tumba_deep']));

$shkafWidth = trim(strip_tags($_POST['shkaf_width']));
$shkafHeight = trim(strip_tags($_POST['shkaf_height']));
$shkafDeep = trim(strip_tags($_POST['shkaf_deep']));

$kuhniaWidth = trim(strip_tags($_POST['kuhnia_width']));
$kuhniaHeight = trim(strip_tags($_POST['kuhnia_height']));
$kuhniaDeep = trim(strip_tags($_POST['kuhnia_deep']));




if((isset($phone)&&$_POST['phone']!='')){
    $to = 'vitaliy.flashnika@gmail.com';
    $subject = 'Заявка на подбор шкафа-купе! сайт Get-best.com.ua';
    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Дата: '.$dt.'</p>
                        <p>Имя: '.$name.'</p>
                        <p>Телефон: '.$phone.'</p> 
                        <p>Комната: '.$place.'</p>
                        <p>Стиль офисной мебели: '.$type.'</p>
                        <p>Тип мебели: '.$typeOfFurnityre.'</p>
                        <p><b>Количество столов: </b>'.$tableAmount.' шт.</p>
                        <p>Размеры столов: Ширина:'.$tableWidth.'см.</p>
                        <p>Размеры столов: Высота:'.$tableHeight.'см.</p>
                        <p>Размеры столов: Глубина:'.$tableDeep.'см.</p>
                        <p><b>Количество кресел:</b> '.$armchairAmount.' шт.</p>
                        <p>Размеры кресел: Ширина:'.$armchairWidth.'см.</p>
                        <p>Размеры кресел: Высота:'.$armchairHeight.'см.</p>
                        <p>Размеры кресел: Глубина:'.$armchairDeep.'см.</p>
                        <p><b>Количество диванов: </b>'.$sofaAmount.' шт.</p>
                        <p>Размеры диванов: Ширина:'.$sofaWidth.'см.</p>
                        <p>Размеры диванов: Высота:'.$sofaHeight.'см.</p>
                        <p>Размеры диванов: Глубина:'.$sofaDeep.'см.</p>
                        <p><b>Количество тумб: </b>'.$nightstandAmount.' шт.</p>
                        <p>Размеры тумб: Ширина:'.$tumbaWidth.'см.</p>
                        <p>Размеры тумб: Высота:'.$tumbaHeight.'см.</p>
                        <p>Размеры тумб: Глубина:'.$tumbaDeep.'см.</p>
                        <p><b>Количество шкафов: </b>'.$closetAmount.' шт.</p>
                        <p>Размеры шкафов: Ширина:'.$shkafWidth.'см.</p>
                        <p>Размеры шкафов: Высота:'.$shkafHeight.'см.</p>
                        <p>Размеры шкафов: Глубина:'.$shkafDeep.'см.</p>
                        <p><b>Количество кухонь: </b>'.$kitchenAmount.' шт.</p>
                        <p>Размеры кухонь: Ширина:'.$kuhniaWidth.'см.</p>
                        <p>Размеры кухонь: Высота:'.$kuhniaHeight.'см.</p>
                        <p>Размеры кухонь: Глубина:'.$kuhniaDeep.'см.</p>
                        <p>Дополнительная комплектация: '.$contain.' шт.</p>
                        <p>Количество урн: '.$shoemakerAmount.' шт.</p>
                        <p>Количество вешалок: '.$hangerAmount.' шт.</p>
                        <p>Количество перегородок: '.$partitionAmount.' шт.</p>
                        <p>Другая дополнительная комплектация: '.$otherAdditional.'</p>                        
                        <p>Дополнительные условия покупки: '.$terms.'</p>                                                                                        
                    </body>
                </html>';
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Просчет офиски <info@get-best.com.ua>\r\n";
    $response = [];
    if(mail($to, $subject, $message, $headers)){
        $response = ['success'=> true,'name'=>$name,'phone'=>$phone];
    } else {
        $response = ['success'=> false,'message'=>'Что-то пошло не так! Попробуйте отправить сообщение позже !'];
    }
    $response['success'] ? header('HTTP/1.1 200 OK') : header('HTTP/1.1 500 Internal Server Error') ;
    header('Content-Type: application/json');
    echo json_encode($response);
}
 $msg = "Просчет офисной мебели"."%0A"."Дата: $dt"."%0A"."Имя: $name"."%0A"."Телефон: $phone"."%0A"."Комната: $place"."%0A"."Стиль офисной мебели: $type"."%0A"."Тип мебелиь: $typeOfFurnityre"."%0A"."Количество столов: $tableAmount шт. (Ширина: $tableWidth, Высота: $tableHeight, Глубина: $tableDeep)"."%0A"."Количество кресел: $armchairAmount шт. (Ширина: $armchairWidth, Высота: $armchairHeight, Глубина: $armchairDeep)"."%0A"."Количество диванов: $sofaAmount шт. (Ширина: $sofaWidth, Высота: $sofaHeight, Глубина: $sofaDeep)"
     ."%0A"."Количество тумб: $nightstandAmount шт. (Ширина: $tumbaWidth, Высота: $tumbaHeight, Глубина: $tumbaDeep)"."%0A"."Количество шкафов: $closetAmount шт. (Ширина: $shkafWidth, Высота: $shkafHeight, Глубина: $shkafDeep)"."%0A"."Количество кухонь: $kitchenAmount шт. (Ширина: $kuhniaWidth, Высота: $kuhniaHeight, Глубина: $kuhniaDeep)"."%0A"."Дополнительная комплектация: $contain"
     ."%0A"."Количество урн: $shoemakerAmount"."%0A"."Количество вешалок: $hangerAmount"."%0A"."Количество перегородок: $partitionAmount"."%0A"."Другая дополнительная комплектация: $otherAdditional"."%0A"."Дополнительные условия покупки: $terms";
 file_get_contents("https://api.telegram.org/bot570437910:AAEwPpGQmtVYaeRsLwiUSVr1crfjdjQ8WY4/sendMessage?chat_id=-1001486681540&text=$msg"."%0A"."Ключевое слово: $utm");
