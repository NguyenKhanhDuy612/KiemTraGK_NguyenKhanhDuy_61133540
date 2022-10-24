<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra</title>
    <style>
    
</style>
</head>
<body>
    <?php
    $str ="";
        if(isset($_POST['themsv'])){
            if(isset($_POST['ma_sv']) && $_POST['ma_sv'] == ""){
                echo "Không được bỏ trống mã sv";
            }elseif(isset($_POST['ho_ten']) && $_POST['ho_ten'] == ""){
                echo "Không được bỏ trống họ tên sv";
            }elseif(isset($_POST['ngay_sinh']) && $_POST['ngay_sinh'] == ""){
                echo "Không được bỏ trống ngày sinh sv";
            }else{
                $fp = fopen('../sinhvien.dat', 'a');
            $data =  "Mã lớp: ".$_POST['ma_lop'] .
                     "\n" ."Giới tính: ". $_POST['radGT'] 
                    . "\n" . "Mã SV: ". $_POST['ma_sv']  
                    . "\n" ."Họ tên: ".  $_POST['ho_ten'] 
                    . "\n" ."Ngày sinh: ".  $_POST['ngay_sinh']  . "\n". "\n". "\n";
            fwrite($fp, $data);
            fclose($fp);
            // $readFile = fopen('../bai6.txt', "r") or die("File $fp not found !!");
            // $temp = fgets($readFile);
            // $tang = fgets($readFile);
            // $giam = fgets($readFile);
            // fclose($readFile);
            }
            $str =$data;

            

        }
    ?>
    <form action="" method="post">
        <fieldset>
        <table>
            <tr>
                <td>
                    Mã Lớp:
                    </td>
                <td> 
                <select name="ma_lop">

                    <option value="61.CNTT-1" <?php if(isset($_POST['lunch'])&& $_POST['ma_lop']=='61.CNTT-1') echo 'selected';?>>
                    61.CNTT-1
                    </option>
                    <option value="61.CNTT-2" <?php if(isset($_POST['lunch'])&& $_POST['ma_lop']=='61.CNTT-2') echo 'selected';?>>
                    61.CNTT-2
                    </option>
                    <option value="62.TTQL" <?php if(isset($_POST['lunch'])&& $_POST['ma_lop']=='62.TTQL') echo 'selected';?>>
                    62.TTQL
                    </option>

                    

                </select>
                </td>
            </tr>
            <tr>
                <td>
                    Giới tính:
                    </td>
                <td>
                
                    <input type="radio" name="radGT" value="Nam"
                        <?php if(isset($_POST['radGT'])&&$_POST['radGT']=='Nam') 
                        echo 'checked="checked"';
                    ?> checked/>		
                    Nam

                    <input type="radio" name="radGT" value="Nữ" 
                        <?php if(isset($_POST['radGT'])&&$_POST['radGT']=='Nữ') 
                        echo 'checked="checked"';
                        ?>
                    />
                    Nữ
       
                </td>

            </tr>
            <tr>
                <td>
                        Mã SV: 
                        </td>
                <td>
                                <input required type="text"  name="ma_sv" 
                                value="<?php if(isset($_POST['ma_sv'])) 
                        echo $_POST['ma_sv'];?>"/>
                </td>

            </tr>
            <tr>
                <td>
                        Họ tên SV:
                        </td>
                <td> 
                                <input required type="text"  name="ho_ten" 
                                value="<?php if(isset($_POST['ho_ten'])) 
                        echo $_POST['ho_ten'];?>"/>
                </td>

            </tr>
            <tr>
                <td>
                        Ngày sinh: 
                 </td>
                <td>
                                <input required type="text"  name="ngay_sinh" 
                                value="<?php if(isset($_POST['ngay_sinh'])) 
                        echo $_POST['ngay_sinh'];?>"/>
                </td>

            </tr>
            <tr>
                <td>
                    <input type="submit" name="themsv" value="Thêm sinh viên"/>
                </td>
            </tr>
            <tr>
                <td >Kết quả:</td>

                <td >
                    <textarea name="ketqua" cols="70" rows="7" disabled="disabled">
                        <?php echo $str;?>
                    </textarea>
                </td>
            </tr>

        </table>
        </fieldset>
        
    
    </form>
</body>
</html>