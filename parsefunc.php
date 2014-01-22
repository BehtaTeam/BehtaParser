<?php
//Coded By MohammadSaleh Hashemi & Parsing Table by MohammadReza FarzanMehr
$in = "$";
if (isset($_REQUEST['inText'])){
    $in = $_REQUEST['inText'] . "$";
}

$state = 0;
$j = 0;
$i = 0;
$digit = "";
$letter = "";
$id = "";
$result = array();
$flag = false;
$f = false;
$g = false;
$h = false;
$keyword = "";
$line = 1;
$symbolArr = array();

function seperator($i){
    if($i == " " || $i == "\n" || $i == '\n' ||$i == "\t") return 1;
    else return 0;
}

while ($in[$i] != '$') {
    if ($f) {
        $digit = "";
    }
    if ($g) {
        $letter = "";
    }
    if ($h) {
        $id = "";
    }

    /*---------------Switch by Saleh Hashemi ---------------*/

    switch ($state) {
        case 0:
            if (seperator($in[$i])) {
                $i++;
            } else if (ctype_digit($in[$i])) {
                $f = false;
                $digit .= $in[$i];
                $state = 61;
                $i++;

            } else if ($in[$i] == 'i') {
                $state = 1;
                $i++;

            } else if ($in[$i] == 'w') {
                $state = 70;
                $i++;

            } else if ($in[$i] == 't') {
                $state = 75;
                $i++;

            } else if ($in[$i] == 'f') {
                $state = 85;
                $i++;

            } else if ($in[$i] == 'e') {
                $state = 3;
                $i++;

            } else if ($in[$i] == 'b') {
                $state = 9;
                $i++;

            } else if ($in[$i] == 'v') {
                $state = 17;
                $i++;

            } else if ($in[$i] == 'r') {
                $state = 21;
                $i++;

            } else if ($in[$i] == '(') {
                $state = 28;
                $i++;

            } else if ($in[$i] == ')') {
                $state = 29;
                $i++;

            } else if ($in[$i] == '{') {
                $state = 30;
                $i++;

            } else if ($in[$i] == '}') {
                $state = 31;
                $i++;

            } else if ($in[$i] == '[') {
                $state = 32;
                $i++;

            } else if ($in[$i] == ']') {
                $state = 33;
                $i++;

            } else if ($in[$i] == '%') {
                $state = 20;
                $i++;

            } else if ($in[$i] == '&') {
                $state = 41;
                $i++;

            } else if ($in[$i] == '*') {
                $state = 42;
                $i++;

            } else if ($in[$i] == '|') {
                $state = 43;
                $i++;

            } else if ($in[$i] == '/') {
                $state = 44;
                $i++;

            } else if ($in[$i] == ';') {
                $state = 45;
                $i++;

            } else if ($in[$i] == '<') {
                $state = 47;
                $i++;

            } else if ($in[$i] == '>') {
                $state = 50;
                $i++;

            } else if ($in[$i] == '+') {
                $state = 53;
                $i++;

            } else if ($in[$i] == '=') {
                $state = 55;
                $i++;

            } else if ($in[$i] == '!') {
                $state = 57;
                $i++;

            } else if ($in[$i] == '-') {
                $state = 59;
                $i++;

            } else if (seperator($in[$i])) {
                $state = 0;
                $i++;

            } else {
                $state = 110;
            }
            break;

        case 70:
            if($in[$i] == 'h') {
                $state = 71;
                $i++;
            } else {
                $state = 110;
            }
            break;

        case 71:
            if($in[$i] == 'i') {
                $state = 72;
                $i++;
            } else {
                $state = 110;
            }
            break;

        case 72:
            if($in[$i] == 'l') {
                $state = 73;
                $i++;
            } else {
                $state = 110;
            }
            break;

        case 73:
            if($in[$i] == 'e') {
                $state = 74;
                $i++;
            } else {
                $state = 110;
            }
            break;

        case 74:
            if (seperator($in[$i])) {
                $state = 0;
                $result[] = "while recognized in line number " . $line;
                $symbolArr[] = "while";

                $i++;
            } else if ($in[$i] == '(') {
                $state = 28;
                $result[] = "while recognized in line number " . $line;
                $symbolArr[] = "while";
                $i++;

            } else {
                $state = 110;

            }
            break;

        case 1:
            if ($in[$i] == 'n') {
                $state = 7;
                $i++;
            } else if ($in[$i] == 'f') {
                $state = 2;
                $i++;

            } else {
                $state = 110;
            }
            break;
        case 2:
            if (seperator($in[$i])) {
                $state = 0;
                $result[] = "if recognized in line number " . $line;
                $symbolArr[] = "if";

                $i++;
            } else if ($in[$i] == '(') {
                $state = 28;
                $result[] = "if recognized in line number " . $line;
                $symbolArr[] = "if";
                $i++;

            } else {
                $state = 110;

            }
            break;
        case 3:
            if ($in[$i] == 'l') {
                $state = 4;

                $i++;
            } else {
                $state = 110;

            }
            break;
        case 4:
            if ($in[$i] == 's') {
                $state = 5;

                $i++;
            } else {
                $state = 110;

            }
            break;
        case 5:
            if ($in[$i] == 'e') {
                $state = 6;

                $i++;
            } else {
                $state = 110;
            }
            break;

        case 6:
            if (seperator($in[$i])) {
                $state = 0;
                $result[] = "else recognized in line number " . $line;
                $symbolArr[] = "else";
                $i++;
            } else {
                $state = 110;

            }
            break;

        case 75:
            if ($in[$i] == 'r') {
                $state = 76;
                $i++;

            } else {
                $state = 110;
            }
            break;

        case 76:
            if ($in[$i] == 'u') {
                $state = 77;
                $i++;

            } else {
                $state = 110;
            }
            break;

        case 77:
            if ($in[$i] == 'e') {
                $state = 78;
                $i++;

            } else {
                $state = 110;
            }
            break;

        case 78:
            if (seperator($in[$i])) {
                $state = 0;
                $result[] = "true recognized in line number " . $line;
                $symbolArr[] = "true";

                $i++;
            } else if ($in[$i] == ';') {
                $state = 45;
                $result[] = "true recognized in line number " . $line;
                $symbolArr[] = "true";
                $i++;

            } else {
                $state = 110;

            }
            break;

        case 85:
            if ($in[$i] == 'a') {
                $state = 87;
                $i++;

            } else {
                $state = 110;
            }
            break;

        case 87:
            if ($in[$i] == 'l') {
                $state = 88;
                $i++;

            } else {
                $state = 110;
            }
            break;

        case 88:
            if ($in[$i] == 's') {
                $state = 89;
                $i++;

            } else {
                $state = 110;
            }
            break;

        case 89:
            if ($in[$i] == 'e') {
                $state = 90;
                $i++;

            } else {
                $state = 110;
            }
            break;

        case 90:
            if (seperator($in[$i])) {
                $state = 0;
                $result[] = "false recognized in line number " . $line;
                $symbolArr[] = "false";

                $i++;
            } else if ($in[$i] == ';') {
                $state = 45;
                $result[] = "false recognized in line number " . $line;
                $symbolArr[] = "false";
                $i++;

            } else {
                $state = 110;

            }
            break;

        case 7:
            if ($in[$i] == 't') {
                $state = 8;

                $i++;
            } else {
                $state = 110;

            }
            break;
        case 8:
            if (seperator($in[$i])) {
                $state = 0;
                $result[] = "int recognized in line number " . $line;
                $symbolArr[] = "int";
                $i++;
            } else {
                $state = 110;

            }
            break;
        case 9:
            if ($in[$i] == 'o') {
                $state = 10;

                $i++;
            } else if ($in[$i] == 'r') {
                $state = 13;

                $i++;
            } else {
                $state = 110;

            }
            break;
        case 10:
            if ($in[$i] == 'o') {
                $state = 11;

                $i++;
            } else {
                $state = 110;

            }
            break;
        case 11:
            if ($in[$i] == 'l') {
                $state = 12;

                $i++;
            } else {
                $state = 110;

            }
            break;
        case 12:
            if (seperator($in[$i])) {
                $state = 0;
                $result[] = "bool recognized in line number " . $line;
                $symbolArr[] = "bool";

                $i++;
            } else {
                $state = 110;

            }
            break;
        case 13:
            if ($in[$i] == 'e') {
                $state = 14;

                $i++;
            } else {
                $state = 110;

            }
            break;
        case 14:
            if ($in[$i] == 'a') {
                $state = 15;

                $i++;
            } else {
                $state = 110;

            }
            break;
        case 15:
            if ($in[$i] == 'k') {
                $state = 16;

                $i++;
            } else {
                $state = 110;

            }
            break;
        case 16:
            if (seperator($in[$i])) {
                $state = 0;
                $result[] = "break recognized in line number " . $line;
                $symbolArr[] = "break";

                $i++;
            } else if ($in[$i] == ';') {
                $state = 45;
                $result[] = "break recognized in line number " . $line;
                $symbolArr[] = "break";
                $i++;

            } else {
                $state = 110;

            }
            break;


        case 17:
            if ($in[$i] == 'o') {
                $state = 18;

                $i++;
            } else {
                $state = 110;

            }
            break;
        case 18:
            if ($in[$i] == 'i') {
                $state = 19;

                $i++;
            } else {
                $state = 110;

            }
            break;
        case 19:
            if ($in[$i] == 'd') {
                $state = 27;

                $i++;
            } else {
                $state = 110;

            }
            break;
        case 21:
            if ($in[$i] == 'e') {
                $state = 22;

                $i++;
            } else {
                $state = 110;
            }
            break;
        case 22:
            if ($in[$i] == 't') {
                $state = 23;

                $i++;
            } else {
                $state = 110;
            }
            break;
        case 23:
            if ($in[$i] == 'u') {
                $state = 24;

                $i++;
            } else {
                $state = 110;
            }
            break;
        case 24:
            if ($in[$i] == 'r') {
                $state = 25;

                $i++;
            } else {
                $state = 110;
            }
            break;
        case 25:
            if ($in[$i] == 'n') {
                $state = 26;

                $i++;
            } else {
                $state = 110;
            }
            break;
        case 26:
            if (seperator($in[$i])) {
                $state = 0;
                $result[] = "return recognized in line number " . $line;
                $symbolArr[] = "return";
                $i++;
            }else if($in[$i]==';'){
                $state = 45;
                $result[] = "return recognized in line number " . $line;
                $symbolArr[] = "return";
            }
            else {
                $state = 110;
            }
            break;
        case 27:
            if (seperator($in[$i])) {
                $state = 0;
                $result[] = "void recognized in line number " . $line;
                $symbolArr[] = "void";
                $i++;
            } else {
                $state = 110;
            }
            break;

        case 47:
            if (seperator($in[$i])) {
                $result[] = "< Recognized in line number " . $line;
                $symbolArr[] = "<";
                $i++;
                $state = 0;

            } else if ($in[$i] == '=') {
                $i++;
                if (seperator($in[$i])) {
                    $result[] = "<= Recognized in line number " . $line;
                    $symbolArr[] = "<=";
                }
                $i++;
                $state = 0;
            } else {
                $state = 110;
            }
            break;

        case 50:
            if (seperator($in[$i])) {
                $result[] = "> Recognized in line number " . $line;
                $symbolArr[] = ">";
                $i++;
                $state = 0;

            } else if ($in[$i] == '=') {
                $i++;
                if (seperator($in[$i])) {
                    $result[] = ">= Recognized in line number " . $line;
                    $symbolArr[] = ">=";
                }
                $i++;
                $state = 0;
            } else {
                $state = 110;
            }
            break;

        case 53:
            if (seperator($in[$i])) {
                $result[] = "+ Recognized in line number " . $line;
                $symbolArr[] = "+";
                $i++;
                $state = 0;

            } else if ($in[$i] == '=') {
                $i++;
                if (seperator($in[$i])) {
                    $result[] = "+= Recognized in line number " . $line;
                    $symbolArr[] = "+=";
                }
                $i++;
                $state = 0;
            } else {
                $state = 110;
            }
            break;

        case 55:
            if (seperator($in[$i])) {
                $result[] = "= Recognized in line number " . $line;
                $symbolArr[] = "=";
                $i++;
                $state = 0;

            } else if ($in[$i] == '=') {
                $i++;
                if (seperator($in[$i])) {
                    $result[] = "== Recognized in line number " . $line;
                    $symbolArr[] = "==";
                }
                $i++;
                $state = 0;
            } else {
                $state = 110;
            }
            break;

        case 57:
            if (seperator($in[$i])) {
                $result[] = "! Recognized in line number " . $line;
                $symbolArr[] = "!";
                $i++;
                $state = 0;

            } else if ($in[$i] == '=') {
                $i++;
                if (seperator($in[$i])) {
                    $result[] = "!= Recognized in line number " . $line;
                    $symbolArr[] = "!=";
                }
                $i++;
                $state = 0;
            } else {
                $state = 110;
            }
            break;

        case 59:
            if (seperator($in[$i])) {
                $result[] = "- Recognized in line number " . $line;
                $symbolArr[] = "-";
                $i++;
                $state = 0;

            } else if ($in[$i] == '=') {
                $i++;
                if (seperator($in[$i])) {
                    $result[] = "-= Recognized in line number " . $line;
                    $symbolArr[] = "-=";
                }
                $i++;
                $state = 0;
            } else {
                $state = 110;
            }
            break;

        case 61:
            if (ctype_digit($in[$i])) {
                $digit .= $in[$i];
                $i++;
                $state = 61;
            } else if (seperator($in[$i])) {
                $result[] = $digit . " Integer Recognized in line number " . $line;
                $symbolArr[] = "num";
                $i++;
                $f = true;
                $g = false;
                $state = 0;
            } else if (ctype_alpha($in[$i])) {
                $letter .= $in[$i];
                $state = 64;
            } else {
                $state = 110;
            }
            break;

        case 64:
            if (seperator($in[$i])) {
                $result[] = $letter . " Error Recognized in line number " . $line;
                $error = true;
                $state = 0;
                $i++;
                $f = true;
                $g = true;
            } else {
                $letter .= $in[$i];
                $i++;
                $state = 64;
                $g = false;
            }
            break;


        case 28:
            $state = 0;
            $result[] = "( Recognized in line number " . $line;
            $symbolArr[] = "(";
            $i++;
            break;

        case 29:
            $state = 0;
            $result[] = ") Recognized in line number " . $line;
            $symbolArr[] = ")";
            $i++;
            break;

        case 30:
            $state = 0;
            $result[] = "{ Recognized in line number " . $line;
            $symbolArr[] = "{";
            $i++;
            break;

        case 31:
            $state = 0;
            $result[] = "} Recognized in line number " . $line;
            $symbolArr[] = "}";
            $i++;
            break;

        case 32:
            $state = 0;
            $result[] = "[ Recognized in line number " . $line;
            $symbolArr[] = "[";
            $i++;
            break;

        case 33:
            $state = 0;
            $result[] = "] Recognized in line number " . $line;
            $symbolArr[] = "]";
            $i++;
            break;

        case 20:
            $state = 0;
            $result[] = "% Recognized in line number " . $line;
            $symbolArr[] = "%";
            $i++;
            break;

        case 41:
            $state = 0;
            $result[] = "& Recognized in line number " . $line;
            $symbolArr[] = "&";
            $i++;
            break;

        case 42:
            $state = 0;
            $result[] = "* Recognized in line number " . $line;
            $symbolArr[] = "*";
            $i++;
            break;

        case 43:
            $state = 0;
            $result[] = "| Recognized in line number " . $line;
            $symbolArr[] = "|";
            $i++;
            break;

        case 44:
            if($in[$i]!='/'){
                $state = 0;
                $result[] = "/ Recognized in line number " . $line;
                $symbolArr[] = "/";
                $i++;
            }else if($in[$i]=='/'){
                $state = 112;
                $i++;
            }else{
                $state = 110;
            }
            break;

        case 45:
            $state = 0;
            $result[] = "; Recognized in line number " . $line;
            $symbolArr[] = ";";
            $i++;
            break;

        case 110:
            if (seperator($in[$i])) {
                $result[] = $id . " ID Recognized in line number " . $line;
                $symbolArr[] = "id";
                $state = 0;
                $h = true;
                $i++;
            } else {
                $id .= $in[$i];
                $i++;
                $h = false;
            }
            break;
        case 112:
            if(ctype_alpha($in[$i])||ctype_digit($in[$i])||ctype_space($in[$i])){
                $i++;
                while(true){
                    $i++;
                    if($in[$i]=="\n"||$in[$i+1]=='$'){
                        $i++;
                        break;
                    }

                }
            }
            $result[] = $id . "Comment Recognized in line number " . $line;
            $state = 0;
            break;
    }
    if ($in[$i] == "\n") {
        $line++;
    }
}

//--------Saleh-Hashemi------Parsing-Part------------------//


$symbolArr[] = "$"; // Entered Array
$opresult = implode("\n", $result);
$opsymbolArr = implode("\n", $symbolArr);
$parsingTable = array(); //parsing table entries
$stack = array(); // stack for parsing
$numberStack = [0]; // stack for numbers
$i = 0; // counter
$parseError = false;

/* ------- Parsing Table by FarzanMehr -------------
$parsingTable[0]["int"] = "S,7";
$parsingTable[0]["void"] = "S,8";
$parsingTable[0]["bool"] = "S,9";

$parsingTable[1]["$"] = "acc";

$parsingTable[2]["int"] = "S,7";
$parsingTable[2]["void"] = "S,8";
$parsingTable[2]["bool"] = "S,9";

$parsingTable[3]["int"] = "R,3";
$parsingTable[3]["void"] = "R,3";
$parsingTable[3]["bool"] = "R,3";
$parsingTable[3]["$"] = "R,3";

$parsingTable[4]["int"] = "R,4";
$parsingTable[4]["void"] = "R,4";
$parsingTable[4]["bool"] = "R,4";
$parsingTable[4]["$"] = "R,4";

$parsingTable[5]["int"] = "R,5";
$parsingTable[5]["void"] = "R,5";
$parsingTable[5]["bool"] = "R,5";
$parsingTable[5]["$"] = "R,5";

$parsingTable[6]["id"] = "S,12";
//
$parsingTable[7]["id"] = "R,11";
$parsingTable[7]["num"] = "R,11";
$parsingTable[7]["["] = "R,11";
$parsingTable[7]["]"] = "R,11";
//
$parsingTable[8]["id"] = "R,12";
$parsingTable[8]["num"] = "R,12";
$parsingTable[8]["["] = "R,12";
$parsingTable[8]["]"] = "R,12";
//
$parsingTable[9]["int"] = "R,13";
$parsingTable[9]["void"] = "R,13";
$parsingTable[9]["bool"] = "R,13";
$parsingTable[9]["$"] = "R,13";
//
$parsingTable[10]["int"] = "R,2";
$parsingTable[10]["void"] = "R,2";
$parsingTable[10]["bool"] = "R,2";
$parsingTable[10]["$"] = "R,2";
//
$parsingTable[11][";"] = "S,123";
$parsingTable[11][","] = "S,14";
//
$parsingTable[12][";"] = "R,9";
$parsingTable[12][","] = "R,9";
//
$parsingTable[13][";"] = "R,8";
$parsingTable[13][","] = "R,8";
//
$parsingTable[14]["id"] = "S,12";
//
$parsingTable[15]["int"] = "S,7";
$parsingTable[15]["void"] = "S,8";
$parsingTable[15]["bool"] = "S,9";
//
$parsingTable[16]["num"] = "S,22";
//
$parsingTable[17][";"] = "R,7";
$parsingTable[17][","] = "R,7";
//
$parsingTable[18][")"] = "S,23";
//
$parsingTable[19][";"] = "S,24";
$parsingTable[19][")"] = "S,15";
//
$parsingTable[20][")"] = "R,18";
$parsingTable[20][";"] = "R,18";
//
$parsingTable[21]["id"] = "S,27";
//
$parsingTable[22]["]"] = "S,28";
//
$parsingTable[23][";"] = "S,37";
$parsingTable[23]["id"] = "S,57";
$parsingTable[23]["{"] = "S,38";
$parsingTable[23]["num"] = "S,122";
$parsingTable[23]["("] = "S,54";
$parsingTable[23]["if"] = "S,39";
$parsingTable[23]["while"] = "S,40";
$parsingTable[23]["return"] = "S,41";
$parsingTable[23]["break"] = "S,42";
$parsingTable[23]["true"] = "S,58";
$parsingTable[23]["false"] = "S,59";
$parsingTable[23]["!"] = "S,60";
//
$parsingTable[24]["int"] = "S,7";
$parsingTable[24]["void"] = "S,8";
$parsingTable[24]["bool"] = "S,9";
//
$parsingTable[25][","] = "R,61";
$parsingTable[25][";"] = "R,19";
$parsingTable[25][")"] = "R,19";
//
$parsingTable[26][","] = "R,21";
$parsingTable[26][";"] = "R,21";
$parsingTable[26][")"] = "R,21";
//
$parsingTable[27]["["] = "S,62";
$parsingTable[27][","] = "R,22";
$parsingTable[27][";"] = "R,22";
$parsingTable[27][")"] = "R,22";
//
$parsingTable[29]["int"] = "R,14";
$parsingTable[29]["void"] = "R,14";
$parsingTable[29]["bool"] = "R,14";
$parsingTable[29]["$"] = "R,14";
//
//$parsingTable[30]["int"] = "R,15";
//$parsingTable[30]["void"] = "R,15";
//$parsingTable[30]["bool"] = "R,15";
//$parsingTable[30]["$"] = "R,15";
//
$parsingTable[30][";"] = "R,29";
$parsingTable[30]["id"] = "R,29";
$parsingTable[30]["["] = "R,29";
$parsingTable[30]["num"] = "R,29";
$parsingTable[30]["]"] = "R,29";
$parsingTable[30]["int"] = "R,29";
$parsingTable[30]["void"] = "R,29";
$parsingTable[30]["bool"] = "R,29";
$parsingTable[30]["("] = "R,29";
$parsingTable[30]["if"] = "R,29";
$parsingTable[30]["else"] = "R,29";
$parsingTable[30]["while"] = "R,29";
$parsingTable[30]["return"] = "R,29";
$parsingTable[30]["break"] = "R,29";
$parsingTable[30]["-"] = "R,29";
$parsingTable[30]["true"] = "R,29";
$parsingTable[30]["false"] = "R,29";
$parsingTable[30]["!"] = "R,29";
$parsingTable[30]["$"] = "R,29";
//
$parsingTable[31][";"] = "R,30";
$parsingTable[31]["id"] = "R,30";
$parsingTable[31]["["] = "R,30";
$parsingTable[31]["num"] = "R,30";
$parsingTable[31]["]"] = "R,30";
$parsingTable[31]["int"] = "R,30";
$parsingTable[31]["void"] = "R,30";
$parsingTable[31]["bool"] = "R,30";
$parsingTable[31]["("] = "R,30";
$parsingTable[31]["if"] = "R,30";
$parsingTable[31]["else"] = "R,30";
$parsingTable[31]["while"] = "R,30";
$parsingTable[31]["return"] = "R,30";
$parsingTable[31]["break"] = "R,30";
$parsingTable[31]["-"] = "R,30";
$parsingTable[31]["true"] = "R,30";
$parsingTable[31]["false"] = "R,30";
$parsingTable[31]["!"] = "R,30";
$parsingTable[31]["$"] = "R,30";
//
$parsingTable[32][";"] = "R,31";
$parsingTable[32]["id"] = "R,31";
$parsingTable[32]["["] = "R,31";
$parsingTable[32]["num"] = "R,31";
$parsingTable[32]["]"] = "R,31";
$parsingTable[32]["int"] = "R,31";
$parsingTable[32]["void"] = "R,31";
$parsingTable[32]["bool"] = "R,31";
$parsingTable[32]["("] = "R,31";
$parsingTable[32]["if"] = "R,31";
$parsingTable[32]["else"] = "R,31";
$parsingTable[32]["while"] = "R,31";
$parsingTable[32]["return"] = "R,31";
$parsingTable[32]["break"] = "R,31";
$parsingTable[32]["-"] = "R,31";
$parsingTable[32]["true"] = "R,31";
$parsingTable[32]["false"] = "R,31";
$parsingTable[32]["!"] = "R,31";
$parsingTable[32]["$"] = "R,31";

//$parsingTable[32][";"] = "R,36";
//$parsingTable[32]["id"] = "R,36";
//$parsingTable[32]["["] = "R,36";
//$parsingTable[32]["num"] = "R,36";
//$parsingTable[32]["]"] = "R,36";
//$parsingTable[32]["int"] = "R,36";
//$parsingTable[32]["void"] = "R,36";
//$parsingTable[32]["bool"] = "R,36";
//$parsingTable[32]["("] = "R,36";
//$parsingTable[32]["if"] = "R,36";
//$parsingTable[32]["else"] = "R,36";
//$parsingTable[32]["while"] = "R,36";
//$parsingTable[32]["return"] = "R,36";
//$parsingTable[32]["break"] = "R,36";
//$parsingTable[32]["-"] = "R,36";
//$parsingTable[32]["true"] = "R,36";
//$parsingTable[32]["false"] = "R,36";
//$parsingTable[32]["!"] = "R,36";
//$parsingTable[32]["$"] = "R,36";
//
//$parsingTable[33][";"] = "R,76";
//$parsingTable[33][")"] = "R,76";
//$parsingTable[33]["}"] = "R,76";
//$parsingTable[33]["="] = "S,67";
//$parsingTable[33]["+="] = "S,68";
//$parsingTable[33]["-="] = "S,69";
//$parsingTable[33]["|"] = "R,76";
//$parsingTable[33]["&"] = "R,76";
//$parsingTable[33]["<="] = "R,76";
//$parsingTable[33][">="] = "R,76";
//$parsingTable[33]["<"] = "R,76";
//$parsingTable[33][">"] = "R,76";
//$parsingTable[33]["=="] = "R,76";
//$parsingTable[33]["!="] = "R,76";
//$parsingTable[33]["-"] = "R,76";
//$parsingTable[33]["+"] = "R,76";
//$parsingTable[33]["*"] = "R,76";
//$parsingTable[33]["/"] = "R,76";
//$parsingTable[33]["%"] = "R,76";
//
//$parsingTable[34][";"] = "R,47";
//$parsingTable[34]["}"] = "R,47";
//$parsingTable[34][")"] = "R,47";
//$parsingTable[34]["|"] = "S,70";
//
//$parsingTable[35][";"] = "R,37";
//$parsingTable[35]["ID"] = "R,37";
//$parsingTable[35]["{"] = "R,37";
//$parsingTable[35]["num"] = "R,37";
//$parsingTable[35]["}"] = "R,37";
//$parsingTable[35]["int"] = "R,37";
//$parsingTable[35]["void"] = "R,37";
//$parsingTable[35]["bool"] = "R,37";
//$parsingTable[35]["("] = "R,37";
//$parsingTable[35]["if"] = "R,37";
//$parsingTable[35]["else"] = "R,37";
//$parsingTable[35]["while"] = "R,37";
//$parsingTable[35]["return"] = "R,37";
//$parsingTable[35]["break"] = "R,37";
//$parsingTable[35]["-"] = "R,37";
//$parsingTable[35]["true"] = "R,37";
//$parsingTable[35]["false"] = "R,37";
//$parsingTable[35]["$"] = "R,37";
//
$parsingTable[36][";"] = "S,63";
//$parsingTable[36]["="] = "R,48";
//$parsingTable[36]["+="] = "R,48";
//$parsingTable[36]["-="] = "R,48";
//
//$parsingTable[37][";"] = "R,51";
//$parsingTable[37]["}"] = "R,51";
//$parsingTable[37]["("] = "S,72";
//$parsingTable[37][")"] = "R,51";
//$parsingTable[37]["|"] = "R,51";
//$parsingTable[37]["&"] = "S,73";
//
//$parsingTable[38][";"] = "R,53";
//$parsingTable[38][")"] = "R,53";
//$parsingTable[38]["}"] = "R,53";
//$parsingTable[38]["|"] = "R,53";
//$parsingTable[38]["&"] = "R,53";
//
$parsingTable[39]["("] = "S,65";
//$parsingTable[39]["num"] = "S,49";
//$parsingTable[39]["("] = "S,62";
//$parsingTable[39]["-"] = "S,44";
//$parsingTable[39]["true"] = "S,51";
//$parsingTable[39]["false"] = "S,52";
//
$parsingTable[40]["("] = "S,66";
//$parsingTable[40][")"] = "R,55";
//$parsingTable[40]["]"] = "R,55";
//$parsingTable[40]["|"] = "R,55";
//$parsingTable[40]["&"] = "R,55";
//
$parsingTable[41]["id"] = "S,57";
$parsingTable[41]["("] = "S,54";
$parsingTable[41]["true"] = "S,58";
$parsingTable[41]["false"] = "S,59";
$parsingTable[41]["num"] = "S,122";
//$parsingTable[41]["<"] = "S,77";
//$parsingTable[41][">"] = "S,78";
//$parsingTable[41]["=="] = "S,80";
$parsingTable[41]["!"] = "S,47";
$parsingTable[41]["-"] = "S,52";
//$parsingTable[41]["+"] = "S,82";
//
$parsingTable[42][";"] = "S,68";
//$parsingTable[42][")"] = "R,65";
//$parsingTable[42]["|"] = "R,65";
//$parsingTable[42]["&"] = "R,65";
//$parsingTable[42]["<="] = "R,65";
//$parsingTable[42]["<"] = "R,65";
//$parsingTable[42][">"] = "R,65";
//$parsingTable[42]["=="] = "R,65";
//$parsingTable[42]["!="] = "R,65";
//$parsingTable[42]["-"] = "R,65";
//$parsingTable[42]["+"] = "R,65";
//$parsingTable[42]["*"] = "S,86";
//$parsingTable[42]["/"] = "S,87";
//$parsingTable[42]["%"] = "S,88";
//
//$parsingTable[43]["}"] = "R,69";
//$parsingTable[43][")"] = "R,69";
//$parsingTable[43]["|"] = "R,69";
//$parsingTable[43]["&"] = "R,69";
//$parsingTable[43]["<="] = "R,69";
//$parsingTable[43]["<"] = "R,69";
//$parsingTable[43][">"] = "R,69";
//$parsingTable[43]["=="] = "R,69";
$parsingTable[43]["="] = "S,69";
$parsingTable[43]["+="] = "S,70";
$parsingTable[43]["-="] = "S,71";
//$parsingTable[43]["!="] = "R,69";
//$parsingTable[43]["-"] = "R,69";
//$parsingTable[43]["+"] = "R,69";
//$parsingTable[43]["*"] = "R,69";
//$parsingTable[43]["/"] = "R,69";
//$parsingTable[43]["%"] = "R,69";
//
$parsingTable[44]["|"] = "S,72";
//$parsingTable[44]["num"] = "S,49";
//$parsingTable[44]["("] = "S,62";
//$parsingTable[44]["true"] = "S,51";
//$parsingTable[44]["false"] = "S,52";
//
//$parsingTable[45][";"] = "R,74";
//$parsingTable[45][")"] = "R,74";
//$parsingTable[45]["]"] = "R,74";
//$parsingTable[45]["|"] = "R,74";
$parsingTable[45]["&"] = "S,73";
//$parsingTable[45]["<="] = "R,74";
//$parsingTable[45]["<"] = "R,74";
//$parsingTable[45][">"] = "R,74";
//$parsingTable[45]["=="] = "R,74";
//$parsingTable[45]["!="] = "R,74";
//$parsingTable[45]["-"] = "R,74";
//$parsingTable[45]["+"] = "R,74";
//$parsingTable[45]["*"] = "R,74";
//$parsingTable[45]["/"] = "R,74";
//$parsingTable[45]["%"] = "R,74";
//
//$parsingTable[46][";"] = "R,76";
//$parsingTable[46][")"] = "R,76";
//$parsingTable[46]["]"] = "R,76";
//$parsingTable[46]["|"] = "R,76";
//$parsingTable[46]["&"] = "R,76";
//$parsingTable[46]["<="] = "R,76";
//$parsingTable[46]["<"] = "R,76";
//$parsingTable[46][">"] = "R,76";
//$parsingTable[46]["=="] = "R,76";
//$parsingTable[46]["!="] = "R,76";
//$parsingTable[46]["-"] = "R,76";
//$parsingTable[46]["+"] = "R,76";
//$parsingTable[46]["*"] = "R,76";
//$parsingTable[46]["/"] = "R,76";
//$parsingTable[46]["%"] = "R,76";
//
//$parsingTable[47][";"] = "R,77";
$parsingTable[47]["("] = "S,54";
$parsingTable[47]["id"] = "S,57";
$parsingTable[47]["true"] = "S,58";
$parsingTable[47]["false"] = "S,59";
$parsingTable[47]["num"] = "S,122";
//$parsingTable[47]["]"] = "R,77";
//$parsingTable[47]["|"] = "R,77";
//$parsingTable[47]["&"] = "R,77";
//$parsingTable[47]["<="] = "R,77";
//$parsingTable[47]["<"] = "R,77";
//$parsingTable[47][">"] = "R,77";
//$parsingTable[47]["=="] = "R,77";
//$parsingTable[47]["!="] = "R,77";
$parsingTable[47]["-"] = "S,52";
//$parsingTable[47]["+"] = "R,77";
//$parsingTable[47]["*"] = "R,77";
//$parsingTable[47]["/"] = "R,77";
//$parsingTable[47]["%"] = "R,77";
//
//$parsingTable[48][";"] = "R,78";
//$parsingTable[48][")"] = "R,78";
//$parsingTable[48]["]"] = "R,78";
//$parsingTable[48]["|"] = "R,78";
//$parsingTable[48]["&"] = "R,78";
//$parsingTable[48]["<="] = "R,78";
//$parsingTable[48]["<"] = "R,78";
//$parsingTable[48][">"] = "R,78";
//$parsingTable[48]["=="] = "R,78";
//$parsingTable[48]["!="] = "R,78";
//$parsingTable[48]["-"] = "R,78";
//$parsingTable[48]["+"] = "R,78";
//$parsingTable[48]["*"] = "R,78";
//$parsingTable[48]["/"] = "R,78";
//$parsingTable[48]["%"] = "R,78";
//
//$parsingTable[49][";"] = "R,79";
//$parsingTable[49][")"] = "R,79";
//$parsingTable[49]["]"] = "R,79";
//$parsingTable[49]["|"] = "R,79";
//$parsingTable[49]["&"] = "R,79";
$parsingTable[49]["<="] = "S,77";
$parsingTable[49]["<"] = "S,78";
$parsingTable[49][">"] = "R,79";
$parsingTable[49][">="] = "R,80";
$parsingTable[49]["=="] = "S,81";
$parsingTable[49]["!="] = "S,82";
$parsingTable[49]["-"] = "S,84";
$parsingTable[49]["+"] = "S,83";
//$parsingTable[49]["*"] = "R,79";
//$parsingTable[49]["/"] = "R,79";
//$parsingTable[49]["%"] = "R,79";

$parsingTable[50]["*"] = "S,86";
$parsingTable[50]["/"] = "S,87";
$parsingTable[50]["%"] = "S,88";

$parsingTable[52]["("] = "S,54";
$parsingTable[52]["id"] = "S,57";
$parsingTable[52]["true"] = "S,58";
$parsingTable[52]["false"] = "S,59";
$parsingTable[52]["num"] = "S,122";

$parsingTable[54]["!"] = "S,47";
$parsingTable[54]["-"] = "S,52";
$parsingTable[54]["("] = "S,54";
$parsingTable[54]["id"] = "S,57";
$parsingTable[54]["true"] = "S,58";
$parsingTable[54]["false"] = "S,59";
$parsingTable[54]["num"] = "S,122";

$parsingTable[57]["["] = "S,91";
$parsingTable[57]["("] = "S,92";

$parsingTable[60]["id"] = "S,27";

$parsingTable[61]["id"] = "S,27";

$parsingTable[62]["]"] = "S,94";

$parsingTable[64]["int"] = "S,7";
$parsingTable[64]["void"] = "S,8";
$parsingTable[64]["bool"] = "S,9";

$parsingTable[65]["!"] = "S,47";
$parsingTable[65]["-"] = "S,52";
$parsingTable[65]["("] = "S,54";
$parsingTable[65]["id"] = "S,57";
$parsingTable[65]["true"] = "S,58";
$parsingTable[65]["false"] = "S,59";
$parsingTable[65]["num"] = "S,122";

$parsingTable[66]["!"] = "S,47";
$parsingTable[66]["-"] = "S,52";
$parsingTable[66]["("] = "S,54";
$parsingTable[66]["id"] = "S,57";
$parsingTable[66]["true"] = "S,58";
$parsingTable[66]["false"] = "S,59";
$parsingTable[66]["num"] = "S,122";

$parsingTable[67][";"] = "S,98";

$parsingTable[69]["!"] = "S,47";
$parsingTable[69]["-"] = "S,52";
$parsingTable[69]["("] = "S,54";
$parsingTable[69]["id"] = "S,57";
$parsingTable[69]["true"] = "S,58";
$parsingTable[69]["false"] = "S,59";
$parsingTable[69]["num"] = "S,122";

$parsingTable[70]["!"] = "S,47";
$parsingTable[70]["-"] = "S,52";
$parsingTable[70]["("] = "S,54";
$parsingTable[70]["id"] = "S,57";
$parsingTable[70]["true"] = "S,58";
$parsingTable[70]["false"] = "S,59";
$parsingTable[70]["num"] = "S,122";

$parsingTable[71]["!"] = "S,47";
$parsingTable[71]["-"] = "S,52";
$parsingTable[71]["("] = "S,54";
$parsingTable[71]["id"] = "S,57";
$parsingTable[71]["true"] = "S,58";
$parsingTable[71]["false"] = "S,59";
$parsingTable[71]["num"] = "S,122";

$parsingTable[72]["-"] = "S,52";
$parsingTable[72]["("] = "S,54";
$parsingTable[72]["id"] = "S,57";
$parsingTable[72]["true"] = "S,58";
$parsingTable[72]["false"] = "S,59";
$parsingTable[72]["num"] = "S,122";

$parsingTable[73]["-"] = "S,52";
$parsingTable[73]["("] = "S,54";
$parsingTable[73]["id"] = "S,57";
$parsingTable[73]["true"] = "S,58";
$parsingTable[73]["false"] = "S,59";
$parsingTable[73]["num"] = "S,122";

$parsingTable[75]["("] = "S,54";
$parsingTable[75]["id"] = "S,57";
$parsingTable[75]["true"] = "S,58";
$parsingTable[75]["false"] = "S,59";
$parsingTable[75]["num"] = "S,122";

$parsingTable[76]["("] = "S,54";
$parsingTable[76]["id"] = "S,57";
$parsingTable[76]["true"] = "S,58";
$parsingTable[76]["false"] = "S,59";
$parsingTable[76]["num"] = "S,122";

$parsingTable[85]["id"] = "S,57";
$parsingTable[85]["true"] = "S,58";
$parsingTable[85]["false"] = "S,59";
$parsingTable[85]["num"] = "S,122";

$parsingTable[90]["!"] = "S,47";
$parsingTable[90]["-"] = "S,52";
$parsingTable[90]["("] = "S,54";
$parsingTable[90]["id"] = "S,57";
$parsingTable[90]["true"] = "S,58";
$parsingTable[90]["false"] = "S,59";
$parsingTable[90]["num"] = "S,122";

$parsingTable[92]["!"] = "S,47";
$parsingTable[92]["-"] = "S,52";
$parsingTable[92]["("] = "S,54";
$parsingTable[92]["id"] = "S,57";
$parsingTable[92]["true"] = "S,58";
$parsingTable[92]["false"] = "S,59";
$parsingTable[92]["num"] = "S,122";

$parsingTable[95]["]"] = "S,112";

$parsingTable[96][")"] = "S,113";

$parsingTable[97][")"] = "S,114";

$parsingTable[108]["]"] = "S,115";

$parsingTable[109][")"] = "S,116";

$parsingTable[110][","] = "S,117";

$parsingTable[113][";"] = "S,37";
$parsingTable[113]["id"] = "S,57";
$parsingTable[113]["{"] = "S,38";
$parsingTable[113]["num"] = "S,122";
$parsingTable[113]["("] = "S,54";
$parsingTable[113]["if"] = "S,39";
$parsingTable[113]["while"] = "S,40";
$parsingTable[113]["return"] = "S,41";
$parsingTable[113]["break"] = "S,42";
$parsingTable[113]["true"] = "S,58";
$parsingTable[113]["false"] = "S,59";
$parsingTable[113]["!"] = "S,60";

$parsingTable[114][";"] = "S,37";
$parsingTable[114]["id"] = "S,57";
$parsingTable[114]["{"] = "S,38";
$parsingTable[114]["num"] = "S,122";
$parsingTable[114]["("] = "S,54";
$parsingTable[114]["if"] = "S,39";
$parsingTable[114]["while"] = "S,40";
$parsingTable[114]["return"] = "S,41";
$parsingTable[114]["break"] = "S,42";
$parsingTable[114]["true"] = "S,58";
$parsingTable[114]["false"] = "S,59";
$parsingTable[114]["!"] = "S,60";

$parsingTable[118]["else"] = "S,120";

$parsingTable[120][";"] = "S,37";
$parsingTable[120]["id"] = "S,57";
$parsingTable[120]["{"] = "S,38";
$parsingTable[120]["num"] = "S,122";
$parsingTable[120]["("] = "S,54";
$parsingTable[120]["if"] = "S,39";
$parsingTable[120]["while"] = "S,40";
$parsingTable[120]["return"] = "S,41";
$parsingTable[120]["break"] = "S,42";
$parsingTable[120]["true"] = "S,58";
$parsingTable[120]["false"] = "S,59";
$parsingTable[120]["!"] = "S,60";

--------------bayad taghir dade shavand--------------- */


function popStack($popAlpha){ // pop kardan e dade ie vooroodi baz az check kardan baraye vojood dashtan
    global $stack;
    global $numberStack;
    if(end($stack) == $popAlpha){
        array_pop($stack);
        array_pop($numberStack);
        return 1;
    } else {
        return 0;
    }
}

function setGoto($alpha){ // goto alpha
    global $parsingTable;
    global $numberStack;
    $topNumberStack = end($numberStack);
    array_pop($numberStack);
    if ($parsingTable[$topNumberStack][$alpha] != NULL){
        array_push($numberStack, $parsingTable[$topNumberStack][$alpha]);
        return 1;
    } else
        return 0;
}

while ($symbolArr[$i] != NULL) { //parsing while
    if (!isset($parsingTable[end($numberStack)][$symbolArr[$i]])) {
        $text = "Did not accepted!";
        break;
    }
    echo "<br>";
    echo $parsingTable[end($numberStack)][$symbolArr[$i]];
    echo "<br>";
    print_r($numberStack);
    echo "<br>";
    print_r($stack);
    echo "<br>";
    print_r($symbolArr);
    echo "<br>";
    echo $i;
    echo "<br>";
    if ($parseError == true){
        $text = "Did not accepted!";
        break;
    }
    if (!isset($parsingTable[end($numberStack)][$symbolArr[$i]]))
    {
        $text = "Did not accepted!";
        break;
    }
    $exploded = explode(",", $parsingTable[end($numberStack)][$symbolArr[$i]]); // getting parsing table element
    if ($exploded[0] == "S"){ // Shift
        array_push($stack, $symbolArr[$i]);
        $i++;
        array_push($numberStack, $exploded[1]);
    } elseif ($exploded[0] == "acc"){
        $text = "Accepted by BehtaParser";
        break;
    } elseif ($exploded[0] == "R") { //Reduce

        switch ($exploded[1]) { //Reduce functions

            case 0: // Ap -> P
                if (popStack("P")){
                    array_push($stack, "Ap");
                    if (!setGoto("Ap")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 1: // P -> D
                if (popStack("D")){
                    array_push($stack, "P");
                    if (!setGoto("P")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 2: // D -> DC
                if (popStack("C")){
                    if (popStack("D")){
                        array_push($stack, "D");
                        if (!setGoto("D")){
                            $parseError = true;
                        } else $parseError = true;
                    } else $parseError = true;
                } else $parseError = true;
                break;

            case 3: // D -> C
                if (popStack("C")){
                    array_push($stack, "D");
                    if (!setGoto("D")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 4: // C -> V
                if (popStack("V")){
                    array_push($stack, "C");
                    if (!setGoto("C")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 5: // C -> F
                if (popStack("F")){
                    array_push($stack, "C");
                    if (!setGoto("C")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 6: // V -> TA
                if (popStack("A")){
                    if (popStack("T")){
                        array_push($stack, "V");
                        if (!setGoto("V")){
                            $parseError = true;
                        }
                    }else $parseError = true;
                } else $parseError = true;
                break;

            case 7: // A -> A,R
                if (popStack("R")){
                    if (popStack(",")){
                        if (popStack("A")){
                            array_push($stack, "A");
                            if (!setGoto("A")){
                                $parseError = true;
                            }
                        }else $parseError = true;
                    }else $parseError = true;
                } else $parseError = true;
                break;

            case 8: // A -> R
                if (popStack("R")){
                    array_push($stack, "A");
                    if (!setGoto("A")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 9: // R -> id
                if (popStack("id")){
                    array_push($stack, "R");
                    if (!setGoto("R")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 10: // R -> id[num]
                if (popStack("]")){
                    if (popStack("num")){
                        if (popStack("[")){
                            if (popStack("id")){
                                array_push($stack, "R");
                                if (!setGoto("R")){
                                    $parseError = true;
                                }
                            }else $parseError = true;
                        }else $parseError = true;
                    }else $parseError = true;
                } else $parseError = true;
                break;

            case 11: // T -> int
                if (popStack("int")){
                    array_push($stack, "T");
                    if (!setGoto("T")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 12: // T -> void
                if (popStack("void")){
                    array_push($stack, "T");
                    if (!setGoto("T")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 13: // T -> bool
                if (popStack("bool")){
                    array_push($stack, "T");
                    if (!setGoto("T")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 14: // F -> Tid(M)N
                if (popStack("N")){
                    if (popStack(")")){
                        if (popStack("M")){
                            if (popStack("(")){
                                if (popStack("id")){
                                    if (popStack("T")){
                                        array_push($stack, "R");
                                        if (!setGoto("F")){
                                            $parseError = true;
                                        }
                                    }
                                }else $parseError = true;
                            }else $parseError = true;
                        }else $parseError = true;
                    }else $parseError = true;
                } else $parseError = true;
                break;

            case 15: // M -> S
                if (popStack("S")){
                    array_push($stack, "M");
                    if (!setGoto("M")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 17: // S -> S;H
                if (popStack("H")){
                    if (popStack(";")){
                        if (popStack("S")){
                            array_push($stack, "S");
                            if (!setGoto("S")){
                                $parseError = true;
                            }
                        }else $parseError = true;
                    }else $parseError = true;
                } else $parseError = true;
                break;

            case 18: // S -> H
                if (popStack("H")){
                    array_push($stack, "S");
                    if (!setGoto("S")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 19: // H -> TO
                if (popStack("O")){
                    if (popStack("T")){
                        array_push($stack, "H");
                        if (!setGoto("H")){
                            $parseError = true;
                        }
                    }else $parseError = true;
                } else $parseError = true;
                break;

            case 20: // O -> O,L
                if (popStack("L")){
                    if (popStack(";")){
                        if (popStack("O")){
                            array_push($stack, "O");
                            if (!setGoto("O")){
                                $parseError = true;
                            }
                        }else $parseError = true;
                    }else $parseError = true;
                } else $parseError = true;
                break;

            case 21: // O -> L
                if (popStack("L")){
                    array_push($stack, "O");
                    if (!setGoto("O")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 22: // L -> id
                if (popStack("id")){
                    array_push($stack, "L");
                    if (!setGoto("L")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 23: // L -> L[]
                if (popStack("]")){
                    if (popStack("[")){
                        if (popStack("L")){
                            array_push($stack, "L");
                            if (!setGoto("L")){
                                $parseError = true;
                            }
                        }else $parseError = true;
                    }else $parseError = true;
                } else $parseError = true;
                break;

            case 24: // R -> {IQ}
                if (popStack("}")){
                    if (popStack("Q")){
                        if (popStack("I")){
                            if (popStack("{")){
                                array_push($stack, "R");
                                if (!setGoto("R")){
                                    $parseError = true;
                                }
                            }else $parseError = true;
                        }else $parseError = true;
                    }else $parseError = true;
                } else $parseError = true;
                break;

            case 25: // I -> IV
                if (popStack("V")){
                    if (popStack("I")){
                        array_push($stack, "I");
                        if (!setGoto("I")){
                            $parseError = true;
                        }
                    }else $parseError = true;
                } else $parseError = true;
                break;

            case 27: // Q -> QN
                if (popStack("N")){
                    if (popStack("Q")){
                        array_push($stack, "Q");
                        if (!setGoto("Q")){
                            $parseError = true;
                        }
                    }else $parseError = true;
                } else $parseError = true;
                break;

            case 29: // N -> K
                if (popStack("K")){
                    array_push($stack, "N");
                    if (!setGoto("N")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 30: // N -> U
                if (popStack("U")){
                    array_push($stack, "N");
                    if (!setGoto("N")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 31: // N -> X
                if (popStack("X")){
                    array_push($stack, "N");
                    if (!setGoto("N")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 32: // N -> W
                if (popStack("W")){
                    array_push($stack, "N");
                    if (!setGoto("N")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 33: // N -> G
                if (popStack("G")){
                    array_push($stack, "N");
                    if (!setGoto("N")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 34: // N -> J
                if (popStack("J")){
                    array_push($stack, "N");
                    if (!setGoto("N")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 35: // K -> E;
                if (popStack(";")){
                    if (popStack("E")){
                        array_push($stack, "K");
                        if (!setGoto("K")){
                            $parseError = true;
                        }
                    }else $parseError = true;
                } else $parseError = true;
                break;

            case 36: // K -> ;
                if (popStack(";")){
                    array_push($stack, "K");
                    if (!setGoto("K")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 37: // F -> if(E)N
                if (popStack("N")){
                    if (popStack(")")){
                        if (popStack("E")){
                            if (popStack("(")){
                                if (popStack("if")){
                                    array_push($stack, "F");
                                    if (!setGoto("F")){
                                        $parseError = true;
                                    }
                                }else $parseError = true;
                            }else $parseError = true;
                        }else $parseError = true;
                    }else $parseError = true;
                } else $parseError = true;
                break;

            case 38: // X -> if(E)NelseN
                if (popStack("N")){
                    if (popStack("else")){
                        if (popStack("N")){
                            if (popStack(")")){
                                if (popStack("E")){
                                    if (popStack("(")){
                                        if (popStack("if")){
                                            array_push($stack, "X");
                                            if (!setGoto("X")){
                                                $parseError = true;
                                            }
                                        } else $parseError = true;
                                    } else $parseError = true;
                                } else $parseError = true;
                            } else $parseError = true;
                        } else $parseError = true;
                    } else $parseError = true;
                } else $parseError = true;
                break;

            case 39: // W -> while(E)N
                if (popStack("N")){
                    if (popStack(")")){
                        if (popStack("E")){
                            if (popStack("(")){
                                if (popStack("while")){
                                    array_push($stack, "W");
                                    if (!setGoto("W")){
                                        $parseError = true;
                                    }
                                }else $parseError = true;
                            }else $parseError = true;
                        }else $parseError = true;
                    }else $parseError = true;
                } else $parseError = true;
                break;

            case 40: // G -> return;
                if (popStack(";")){
                    if (popStack("return")){
                        array_push($stack, "G");
                        if (!setGoto("G")){
                            $parseError = true;
                        }
                    }else $parseError = true;
                } else $parseError = true;
                break;

            case 41: // G -> returnE;
                if (popStack(";")){
                    if (popStack("E")){
                        if (popStack("return")){
                            array_push($stack, "G");
                            if (!setGoto("G")){
                                $parseError = true;
                            }
                        }else $parseError = true;
                    }else $parseError = true;
                } else $parseError = true;
                break;

            case 42: // J -> break;
                if (popStack(";")){
                    if (popStack("break")){
                        array_push($stack, "J");
                        if (!setGoto("J")){
                            $parseError = true;
                        }
                    }else $parseError = true;
                } else $parseError = true;
                break;

            case 43: // E -> B=E
                if (popStack("E")){
                    if (popStack("=")){
                        if (popStack("B")){
                            array_push($stack, "E");
                            if (!setGoto("E")){
                                $parseError = true;
                            }
                        }else $parseError = true;
                    }else $parseError = true;
                } else $parseError = true;
                break;

            case 44: // E -> B+=E
                if (popStack("E")){
                    if (popStack("+=")){
                        if (popStack("B")){
                            array_push($stack, "E");
                            if (!setGoto("E")){
                                $parseError = true;
                            }
                        }else $parseError = true;
                    }else $parseError = true;
                } else $parseError = true;
                break;

            case 45: // E -> B-=E
                if (popStack("E")){
                    if (popStack("-=")){
                        if (popStack("B")){
                            array_push($stack, "E");
                            if (!setGoto("E")){
                                $parseError = true;
                            }
                        }else $parseError = true;
                    }else $parseError = true;
                } else $parseError = true;
                break;

            case 46: // E -> Z
                if (popStack("Z")){
                    array_push($stack, "E");
                    if (!setGoto("E")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 47: // B -> id
                if (popStack("id")){
                    array_push($stack, "B");
                    if (!setGoto("B")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 48: // R -> id[E]
                if (popStack("]")){
                    if (popStack("E")){
                        if (popStack("[")){
                            if (popStack("id")){
                                array_push($stack, "R");
                                if (!setGoto("R")){
                                    $parseError = true;
                                }
                            }else $parseError = true;
                        }else $parseError = true;
                    }else $parseError = true;
                } else $parseError = true;
                break;

            case 49: // Z -> Z|Y
                if (popStack("Y")){
                    if (popStack("|")){
                        if (popStack("Z")){
                            array_push($stack, "Z");
                            if (!setGoto("Z")){
                                $parseError = true;
                            }
                        }else $parseError = true;
                    }else $parseError = true;
                } else $parseError = true;
                break;

            case 50: // Z -> Y
                if (popStack("Y")){
                    array_push($stack, "Z");
                    if (!setGoto("Z")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 51: // Y -> Y&u
                if (popStack("u")){
                    if (popStack("&")){
                        if (popStack("Y")){
                            array_push($stack, "Y");
                            if (!setGoto("Y")){
                                $parseError = true;
                            }
                        }else $parseError = true;
                    }else $parseError = true;
                } else $parseError = true;
                break;

            case 52: // Y -> u
                if (popStack("u")){
                    array_push($stack, "Y");
                    if (!setGoto("Y")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 53: // u -> !u
                if (popStack("u")){
                    if (popStack("!")){
                        array_push($stack, "u");
                        if (!setGoto("u")){
                            $parseError = true;
                        }
                    }else $parseError = true;
                } else $parseError = true;
                break;

            case 54: // u -> r
                if (popStack("r")){
                    array_push($stack, "u");
                    if (!setGoto("u")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 55: // r -> ded
                if (popStack("d")){
                    if (popStack("e")){
                        if (popStack("d")){
                            array_push($stack, "r");
                            if (!setGoto("r")){
                                $parseError = true;
                            }
                        }else $parseError = true;
                    }else $parseError = true;
                } else $parseError = true;
                break;

            case 56: // r -> d
                if (popStack("d")){
                    array_push($stack, "r");
                    if (!setGoto("r")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 57: // e -> <=
                if (popStack("<=")){
                    array_push($stack, "e");
                    if (!setGoto("e")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 58: // e -> <
                if (popStack("<")){
                    array_push($stack, "e");
                    if (!setGoto("e")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 59: // e -> >
                if (popStack(">")){
                    array_push($stack, "e");
                    if (!setGoto("e")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 60: // e -> >=
                if (popStack(">=")){
                    array_push($stack, "e");
                    if (!setGoto("e")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 61: // e -> ==
                if (popStack("==")){
                    array_push($stack, "e");
                    if (!setGoto("e")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 62: // e -> !=
                if (popStack("!=")){
                    array_push($stack, "e");
                    if (!setGoto("e")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 63: // d -> dbt
                if (popStack("t")){
                    if (popStack("b")){
                        if (popStack("d")){
                            array_push($stack, "d");
                            if (!setGoto("d")){
                                $parseError = true;
                            }
                        }else $parseError = true;
                    }else $parseError = true;
                } else $parseError = true;
                break;

            case 64: // d -> t
                if (popStack("t")){
                    array_push($stack, "d");
                    if (!setGoto("d")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 65: // d -> +
                if (popStack("+")){
                    array_push($stack, "d");
                    if (!setGoto("d")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 66: // d -> -
                if (popStack("-")){
                    array_push($stack, "d");
                    if (!setGoto("d")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 67: // t -> tqy
                if (popStack("y")){
                    if (popStack("q")){
                        if (popStack("t")){
                            array_push($stack, "t");
                            if (!setGoto("t")){
                                $parseError = true;
                            }
                        }else $parseError = true;
                    }else $parseError = true;
                } else $parseError = true;
                break;

            case 68: // t -> y
                if (popStack("y")){
                    array_push($stack, "t");
                    if (!setGoto("t")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 69: // q -> *
                if (popStack("*")){
                    array_push($stack, "q");
                    if (!setGoto("q")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 70: // q -> /
                if (popStack("/")){
                    array_push($stack, "q");
                    if (!setGoto("q")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 71: // q -> %
                if (popStack("%")){
                    array_push($stack, "q");
                    if (!setGoto("q")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 72: // y -> -y
                if (popStack("y")){
                    array_push($stack, "-");
                    if (!setGoto("y")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 73: // y -> f
                if (popStack("f")){
                    array_push($stack, "y");
                    if (!setGoto("y")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 74: // f -> (E)
                if (popStack(")")){
                    if (popStack("E")){
                        if (popStack("(")){
                            array_push($stack, "f");
                            if (!setGoto("f")){
                                $parseError = true;
                            }
                        }else $parseError = true;
                    }else $parseError = true;
                } else $parseError = true;
                break;

            case 75: // f -> B
                if (popStack("B")){
                    array_push($stack, "f");
                    if (!setGoto("f")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 76: // f -> c
                if (popStack("c")){
                    array_push($stack, "f");
                    if (!setGoto("f")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 77: // f -> n
                if (popStack("n")){
                    array_push($stack, "f");
                    if (!setGoto("f")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 78: // n -> num
                if (popStack("num")){
                    array_push($stack, "n");
                    if (!setGoto("n")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 79: // n -> true
                if (popStack("true")){
                    array_push($stack, "n");
                    if (!setGoto("n")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 80: // n -> false
                if (popStack("false")){
                    array_push($stack, "n");
                    if (!setGoto("n")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 81: // c -> id(g)
                if (popStack(")")){
                    if (popStack("g")){
                        if (popStack("(")){
                            if (popStack("id")){
                                array_push($stack, "c");
                                if (!setGoto("c")){
                                    $parseError = true;
                                }
                            }else $parseError = true;
                        }else $parseError = true;
                    }else $parseError = true;
                } else $parseError = true;
                break;

            case 82: // g -> i
                if (popStack("i")){
                    array_push($stack, "g");
                    if (!setGoto("g")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            case 84: // i -> i,E
                if (popStack("E")){
                    if (popStack(",")){
                        if (popStack("i")){
                            array_push($stack, "i");
                            if (!setGoto("i")){
                                $parseError = true;
                            }
                        }else $parseError = true;
                    }else $parseError = true;
                } else $parseError = true;
                break;

            case 85: // i -> E
                if (popStack("E")){
                    array_push($stack, "i");
                    if (!setGoto("i")){
                        $parseError = true;
                    }
                } else $parseError = true;
                break;

            default:
                $text = "did not accepted!";
                break;
        }
    }
}
?>