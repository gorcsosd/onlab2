-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2020. Nov 24. 09:54
-- Kiszolgáló verziója: 10.4.14-MariaDB
-- PHP verzió: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `villszertudastar`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `aramhatas`
--

CREATE TABLE `aramhatas` (
  `id` int(6) NOT NULL,
  `valtakozoaram` varchar(50) NOT NULL,
  `egyenaram` varchar(50) NOT NULL,
  `hatas` varchar(200) NOT NULL,
  `megjegyzes` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `aramhatas`
--

INSERT INTO `aramhatas` (`id`, `valtakozoaram`, `egyenaram`, `hatas`, `megjegyzes`) VALUES
(1, '0,5-1,5 mA', '2-6 mA', 'Gyenge rázásérzet', 'Érzetküszöb'),
(2, '2-3 mA', '8-10 mA', 'Mozgást nem gátló rázásérzet', ''),
(3, '10-15 mA', '60-70 mA', 'Fájdalmas izomgörcs, a vezetőt még éppen el tudja engedni', 'Elengedési áramerősség, a veszélyesség kezdete'),
(4, '20-25 mA', '80-90 mA', 'Erős fájdalom, szabálytalan szívműködés, légző izmok görcse már lehetséges', 'Az áramkörből való öntevékeny kiszabadulás lehetetlen, így a behatási idő korlátlan mértékben megnőhet'),
(5, '30-40 mA', '110-140 mA', 'Eszméletvesztés, a légző izmok görcse', ''),
(6, '80-100 mA felett', '300-400 mA felett', 'Szívkamraremegés, szívbénulás', 'Halálveszély, 0,1-0,3 mp után azonnali halál');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `egyenfeszultseg`
--

CREATE TABLE `egyenfeszultseg` (
  `id` int(6) NOT NULL,
  `feszultseg` varchar(50) NOT NULL,
  `leiras` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `egyenfeszultseg`
--

INSERT INTO `egyenfeszultseg` (`id`, `feszultseg`, `leiras`) VALUES
(1, '1,5 volt', 'például ceruzaelem, 1 db elemmel működtetett készülékek.'),
(2, '3 volt', 'gombelemek, 2 ceruza együttes használata, órák, digitális mérlegek, távirányítók.'),
(3, '5 volt', 'jellemzően transzformátorról egyenirányítás után kapott feszültségszint, elektronikai berendezésekben, számítógépekben fordul elő.'),
(4, '9 volt', '9 voltos elem, erősebb áramot igénylő elektromos berendezések, például kapucsengő.'),
(5, '12 volt', 'akkumulátorok, autók, egyes elektronikai berendezések, akkumulátoros szerszámgépek.'),
(6, '12 volt', 'transzformátorról, híradástechnikai berendezések, számítógép, háztartási berendezések.'),
(7, '24 volt', 'akkumulátorról, jellemzően teherautókban használatos feszültségszint.');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `feszultseg`
--

CREATE TABLE `feszultseg` (
  `id` int(6) NOT NULL,
  `orszag` varchar(30) NOT NULL,
  `csatlakozo` varchar(30) NOT NULL,
  `feszultseg` varchar(30) NOT NULL,
  `frekvencia` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `feszultseg`
--

INSERT INTO `feszultseg` (`id`, `orszag`, `csatlakozo`, `feszultseg`, `frekvencia`) VALUES
(1, 'Ausztria', 'C, F', '230 V', '50 Hz'),
(2, 'Belgium', 'E', '230 V', '50 Hz'),
(3, 'Bulgária', 'C, F', '230 V', '50 Hz'),
(4, 'Ciprus', 'G', '240 V', '50 Hz'),
(5, 'Csehország', 'C, E', '230 V', '50 Hz'),
(6, 'Dánia', 'C, K', '230 V', '50 Hz'),
(7, 'Észtország', 'C, F', '230 V', '50 Hz'),
(8, 'Finnország', 'C, F', '230 V', '50 Hz'),
(9, 'Franciaország', 'C, E', '230 V', '50 Hz'),
(10, 'Görögország', 'C, F', '230 V', '50 Hz'),
(11, 'Hollandia', 'C, F', '230 V', '50 Hz'),
(12, 'Horvátország', 'C, F', '230 V', '50 Hz'),
(13, 'Írország', 'G', '230 V', '50 Hz'),
(14, 'Lettország', 'C, F', '220 V', '50 Hz'),
(15, 'Lengyelország', 'C, E', '230 V', '50 Hz'),
(16, 'Litvánia', 'C, F', '220 V', '50 Hz'),
(17, 'Luxemburg', 'C, F', '230 V', '50 Hz'),
(18, 'Magyarország', 'C, F', '230 V', '50 Hz'),
(19, 'Málta', 'G', '230 V', '50 Hz'),
(20, 'Németország', 'C, F', '230 V', '50 Hz'),
(21, 'Olaszország', 'C, F, L', '230 V', '50 Hz'),
(22, 'Portugália', 'C, F', '230 V', '50 Hz'),
(23, 'Románia', 'C, F', '220 V-tól 230 V', '50 Hz'),
(24, 'Spanyolország', 'C,F', '230 V', '50 Hz'),
(25, 'Svédország', 'C,F', '230 V', '50 Hz'),
(26, 'Szlovákia', 'C, E', '230 V', '50 Hz'),
(27, 'Szlovénia', 'C, F', '230 V', '50 Hz');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `kepletek`
--

CREATE TABLE `kepletek` (
  `id` int(6) NOT NULL,
  `mennyiseg` varchar(30) NOT NULL,
  `jeloles` varchar(30) NOT NULL,
  `osszefugges` varchar(50) NOT NULL,
  `szarmaztatas` varchar(200) DEFAULT NULL,
  `mertekegyseg` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `kepletek`
--

INSERT INTO `kepletek` (`id`, `mennyiseg`, `jeloles`, `osszefugges`, `szarmaztatas`, `mertekegyseg`) VALUES
(1, 'Villamos feszültség', 'U, u', 'P = U*I, U = P/I', '1 Volt; 1 Watt teljesítményt hoz létre 1 A áramnál', 'Volt'),
(2, 'Villamos energia', 'W', 'W = P*t = U*I*t', '', '1 Nm = 1 VAs = 1 Ws = 1 J'),
(3, 'Villamos teljesítmény', 'P', 'P = U*I = W/t', '1 Joule energia 1 s alatt = 1 Watt', '1 W (Watt) 1 VA'),
(4, 'Villamos ellenállás', 'R', 'R = U/I', '1 Ω az ellenállás. ha a vezető két pontja közt 1 A áram 1 V feszültséget hoz létre', '1 Ω (Ohm)'),
(5, 'Vezetőképesség', 'G', 'G = 1/R', '', '1 S = 1/Ω siemens'),
(6, 'Villamos töltés', 'Q, q', 'Q = I*t', '1 C a töltés, amely a vezetőn 1 A mellett 1 s alatt átfolyik', '1 Coulomb = 1 As'),
(7, 'Villamos kapacitás', 'C', 'C = Q/U', '1 F a kapacitása a kondenzátornak, melyet 1 Volt feszültség 1 C = 1 As-al tölt fel', '1 F = 1*(As/V)'),
(8, 'Villamos térerősség', 'E', 'E = U/1', 'Egységnyi a térerősség, ha homogén térben két, 1 m távolságra lévő pont között U = 1 V', 'V/m'),
(9, 'Mágneses fluxus', 'φ (fi)', 'U = Δφ/Δt', '1 Wb fluxus 1 menetben 1 s alatt egyenletesen nullára csökkenve 1 V feszültséget indukál', ' 1 V feszültséget indukál'),
(10, 'Mágneses indukció', 'B', 'B = φ/A', 'A mágneses tér felületi sűrűsége: 1 Wb fluxus, 1 m² felületen halad át', '1 T = Vs/m², Tesla'),
(11, 'Induktivitás', 'L *vákuumban', 'L = φ/I', '1 menetnek 1 H az induktivitása, amely 1 A hatására 1 Wb fluxust fog át', '1 H = 1*(Vs/A), Henry'),
(12, 'Mágneses térerősség', 'H *vákuumban', 'H = I/1', 'Végtelen hosszú vezető 1 A áram esetén 1 m kerületű koncentrikus kör mentén hoz létre egységnyi mágneses térerősséget', '1*(A/m)');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `mertekegyseg`
--

CREATE TABLE `mertekegyseg` (
  `id` int(6) NOT NULL,
  `nev` varchar(30) NOT NULL,
  `jel` varchar(10) NOT NULL,
  `atvaltas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `mertekegyseg`
--

INSERT INTO `mertekegyseg` (`id`, `nev`, `jel`, `atvaltas`) VALUES
(1, 'Nano', 'n', '10<sup>-9</sup>'),
(2, 'Mikro', 'μ', '10<sup>-6</sup>'),
(3, 'Milli', 'm', '10<sup>-3</sup>'),
(4, 'Kilo', 'k', '1 000'),
(5, 'Mega', 'M', '1 000 000'),
(6, 'Giga', 'G', '1 000 000 000');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `valtakozofeszultseg`
--

CREATE TABLE `valtakozofeszultseg` (
  `id` int(6) NOT NULL,
  `feszultseg` varchar(50) NOT NULL,
  `leiras` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `valtakozofeszultseg`
--

INSERT INTO `valtakozofeszultseg` (`id`, `feszultseg`, `leiras`) VALUES
(1, '110 volt', 'például az Amerikai Egyesült Államokban használt szabványos háztartási feszültségszint.'),
(2, '230 volt', 'szabványos feszültségszint háztartási felhasználásra a világ nagy részén, többek között Magyarországon.'),
(3, '400 volt', 'Magyarországon szabványos ipari felhasználásra szánt feszültségszint, \n    úgynevezett ipari áram. 3 fázisú hálózat, jellemzője, hogy a 400 voltos feszültségkülönbség 2 különböző fázis között mérhető, \n    a nulla vezetőhöz képest fázisonként 230 voltot kapunk.');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `villanyszamla`
--

CREATE TABLE `villanyszamla` (
  `id` int(6) NOT NULL,
  `szolgaltato` varchar(30) NOT NULL,
  `normaldij` float NOT NULL,
  `kedvezmenyesdij` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `villanyszamla`
--

INSERT INTO `villanyszamla` (`id`, `szolgaltato`, `normaldij`, `kedvezmenyesdij`) VALUES
(1, 'EON', 37.74, 35.31),
(2, 'ELMŰ', 37.54, 36.22),
(3, 'ÉMÁSZ', 37.31, 36),
(4, 'NKM', 37.516, 36.398);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `aramhatas`
--
ALTER TABLE `aramhatas`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `egyenfeszultseg`
--
ALTER TABLE `egyenfeszultseg`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `feszultseg`
--
ALTER TABLE `feszultseg`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `kepletek`
--
ALTER TABLE `kepletek`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `mertekegyseg`
--
ALTER TABLE `mertekegyseg`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `valtakozofeszultseg`
--
ALTER TABLE `valtakozofeszultseg`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `villanyszamla`
--
ALTER TABLE `villanyszamla`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `aramhatas`
--
ALTER TABLE `aramhatas`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT a táblához `egyenfeszultseg`
--
ALTER TABLE `egyenfeszultseg`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT a táblához `feszultseg`
--
ALTER TABLE `feszultseg`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT a táblához `kepletek`
--
ALTER TABLE `kepletek`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT a táblához `mertekegyseg`
--
ALTER TABLE `mertekegyseg`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT a táblához `valtakozofeszultseg`
--
ALTER TABLE `valtakozofeszultseg`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT a táblához `villanyszamla`
--
ALTER TABLE `villanyszamla`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
