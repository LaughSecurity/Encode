<?php
        // Coded by Syahrul R.
echo " _\n";
echo "| | __ _ _   _  __ _| |__  ___  ___  ___\n";
echo "| |/ _` | | | |/ _` | '_ \/ __|/ _ \/ __|\n";
echo "| | (_| | |_| | (_| | | | \__ \  __/ (__\n";
echo "|_|\__,_|\__,_|\__, |_| |_|___/\___|\___|\n";
echo " LaughSecurity |___/Coded by Syahrul R.\n";
echo "Menu:\n";
echo "-----------------------\n";
echo "1) Encode Md5\n";
echo "2) Encode Base64\n";
echo "3) Encode Sha1\n";
echo "4) Encode Md4\n";
echo "5) Encode Semua type\n";
echo "0) Exit\n";
echo "-----------------------\n";
echo "input type the number : ";
switch(trim(fgets(STDIN,256)))
        {
            case 1:
                echo "Input your world / data : ";
                $kata = trim(fgets(STDIN,256));
                echo "Encode Md5 :",md5($kata),"\n";
                exit();
            case 2:
                echo "Input your world / data : ";
                $kata = trim(fgets(STDIN));
                echo "Encode Base64 :",base64_encode($kata),"\n";
                exit();
            case 3:
                echo "Input your world / data : ";
                $kata = trim(fgets(STDIN));
                echo "Encode SHA1 :",sha1($kata),"\n";
                exit();
            case 4:
                echo "Input your world / data : ";
                $kata = trim(fgets(STDIN));
                echo "Encode Md4 :",crypt('md4',$kata);
                exit();
            case 5:
                echo "Input your world / data : ";
                $kata = trim(fgets(STDIN));
                foreach (hash_algos() as $v) {
                $r = hash($v, $kata, false);
                printf("%-12s %3d %s\n", $v, strlen($r), $r);
                }
                exit();
            case "0":
                exit();
        }
    fclose(STDIN);
?>
