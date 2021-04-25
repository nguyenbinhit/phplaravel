<?php
require_once "connection.php";

$user_name = "";
$last_name = "";
$first_name = "";
$user_phone = "";
$user_password = "";
$user_email = "";
$user_address = "";
$user_birthday = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $error = [];

    // check user_name
    if($_POST["user_name"] == '') {
        $error["user_name"] = "Vui lòng nhập Username người dùng";
    }
    elseif (isset($_POST["user_name"]) && (strlen($_POST["user_name"]) > 0))
    {
        $user_name = $_POST["user_name"];

        $patternuser_name = '/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]{6,32}+$/';

        if (preg_match($patternuser_name, $user_name) != 1) {
            // sai định dạng
            $error["user_name"] = "Bạn nhập Username người dùng sai định dạng";
        }
        else
        {
            $check_user = "SELECT * FROM users WHERE 'user_name' = '".$_POST['user_name']."'";
            $is_check = $connection->query($check_user);
            if($is_check != NULL)
            {
                $error['user_name'] = " Đã tồn tại Username người dùng! ";
            }
        }
    }


    // check last_name
    if (isset($_POST["last_name"]) && (strlen($_POST["last_name"]) > 0))
    {
        $last_name = $_POST["last_name"];

        $patternlast_name = '/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]{1,3}+$/';

        if (preg_match($patternlast_name, $last_name) != 1) {
            // sai định dạng
            $error["last_name"] = "Bạn nhập last_name người dùng sai định dạng";
        }
    }
    elseif($_POST["last_name"] == '') {
        $error["last_name"] = "Vui lòng nhập last_name người dùng";
    }

    // check first_name
    if (isset($_POST["first_name"]) && (strlen($_POST["first_name"]) > 0))
    {
        $first_name = $_POST["first_name"];

        $patternfirst_name = '/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]{1,2}+$/';

        if (preg_match($patternfirst_name, $first_name) != 1) {
            // sai định dạng
            $error["first_name"] = "Bạn nhập first_name người dùng sai định dạng";
        }
    }elseif($_POST["first_name"] == '') {
        $error["first_name"] = "Vui lòng nhập first_name người dùng";
    }

    // check user_phone
    if($_POST["user_phone"] == '') {
        $error["user_phone"] = "Vui lòng nhập SDT người dùng";
    }
    elseif (isset($_POST["user_phone"]) && (strlen($_POST["user_phone"]) > 0))
    {
        $user_phone = $_POST["user_phone"];

        $patternuser_phone = '/(84|0[3|5|7|8|9])+([0-9]{8})/';

        if (preg_match($patternuser_phone, $user_phone) != 1) {
            // sai định dạng
            $error["user_phone"] = "Bạn nhập SĐT người dùng sai định dạng";
        }
        else
        {
            $check_phone = "SELECT * FROM users WHERE 'user_phone' = '".$_POST['user_phone']."'";
            $is_check = $connection->query($check_phone);
            if($is_check != NULL)
            {
                $error['user_phone'] = " Đã tồn tại SDT người dùng! ";
            }
        }
    }


    // check user_password
    if($_POST["user_name"] == '') {
        $error["user_password"] = "Vui lòng nhập mật khẩu người dùng";
    }elseif(isset($_POST["user_password"]) && (strlen($_POST["user_password"]) > 0))
    {
        $user_password = $_POST["user_password"];

        $patternuser_password = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,32}$/';

        if (preg_match($patternuser_password, $user_password) != 1) {
            // sai định dạng
            $error["user_password"] = "Bạn nhập mật khẩu người dùng sai định dạng";
        }
    }

    // check user_email
    if($_POST["user_email"] == '') {
        $error["user_email"] = "Vui lòng nhập email người dùng";
    }
    elseif (isset($_POST["user_email"]) && (strlen($_POST["user_email"]) > 0))
    {
        $user_email = $_POST["user_email"];

        $patternuser_email = '/^[a-z][a-z0-9_\.]{5,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$/';

        if (preg_match($patternuser_email, $user_email) != 1) {
            // sai định dạng
            $error["user_email"] = "Bạn nhập email người dùng sai định dạng";
        }
        else
        {
            $check_email = "SELECT * FROM users WHERE 'user_email' = '".$_POST['user_email']."'";
            $is_check = $connection->query($check_email);
            if($is_check != NULL)
            {
                $error['user_email'] = " Đã tồn tại email người dùng! ";
            }
        }
    }


    // check user_avatar
    if ( !isset($_FILES['user_avatar']))
    {
        $error['user_avatar'] = "Mời bạn chọn hình ảnh ";
    }

    // check user_address
    if (isset($_POST["user_address"]) && (strlen($_POST["user_address"]) > 0))
    {
        $user_address = $_POST["user_address"];

        $patternuser_address = '    /^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]{1,200}+$/';

        if (preg_match($patternuser_address, $user_address) != 1) {
            // sai định dạng
            $error["user_address"] = "Bạn nhập địa chỉ người dùng sai định dạng";
        }
    }elseif($_POST["user_address"] == '') {
        $error["user_address"] = "Vui lòng nhập địa chỉ người dùng";
    }

    // check user_birthday
    if($_POST["user_birthday"] == '') {
        $error["user_birthday"] = "Vui lòng chọn ngày sinh người dùng";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Thêm mới người dùng</h1>
            <form name="themsv" method="post" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Username người dùng <span style="color:red">*</span> (từ 6 đên 32 ký tự và không trùng lặp với user khác )</label>
                    <input type="text" name="user_name" value="<?php echo $user_name ?>" class="form-control">
                    <?php if (isset($error['user_name'])): ?>
                        <p class="text-danger">
                            <?php echo $error['user_name'] ?>
                        </p>
                    <?php endif ?>
                </div>

                <div class="form-group">
                    <label>Lastname người dùng <span style="color:red">*</span> ( họ người dùng từ 1 đến 3 chữ )</label>
                    <input type="text" name="last_name" value="<?php echo $last_name ?>" class="form-control">
                    <?php if (isset($error['last_name'])): ?>
                        <p class="text-danger">
                            <?php echo $error['last_name'] ?>
                        </p>
                    <?php endif ?>
                </div>

                <div class="form-group">
                    <label>Firstname người dùng <span style="color:red">*</span> (tên người dùng từ 1 đến 2 chữ )</label>
                    <input type="text" name="first_name" value="<?php echo $first_name ?>" class="form-control">
                    <?php if (isset($error['first_name'])): ?>
                        <p class="text-danger">
                            <?php echo $error['first_name'] ?>
                        </p>
                    <?php endif ?>
                </div>

                <div class="form-group">
                    <label>SDT người dùng <span style="color:red">*</span> ( 10 số và không trùng lặp với user khác )</label>
                    <input type="text" name="user_phone" value="<?php echo $user_phone ?>" class="form-control">
                    <?php if (isset($error['user_phone'])): ?>
                        <p class="text-danger">
                            <?php echo $error['user_phone'] ?>
                        </p>
                    <?php endif ?>
                </div>

                <div class="form-group">
                    <label>Mật khẩu người dùng <span style="color:red">*</span> ( từ 8 đến 32 ký tự có chứa ít nhất 1 ký tự viết hoa,chứa ít nhất 1 số )</label>
                    <input type="password" name="user_password" value="<?php echo $user_password ?>" class="form-control">
                    <?php if (isset($error['user_password'])): ?>
                        <p class="text-danger">
                            <?php echo $error['user_password'] ?>
                        </p>
                    <?php endif ?>
                </div>

                <div class="form-group">
                    <label>Email người dùng <span style="color:red">*</span> (tối đa 64 ký tự theo định dạng email : abc@domain.com và không trùng lặp với user khác)</label>
                    <input type="email" name="user_email" value="<?php echo $user_email ?>" class="form-control">
                    <?php if (isset($error['user_email'])): ?>
                        <p class="text-danger">
                            <?php echo $error['user_email'] ?>
                        </p>
                    <?php endif ?>
                </div>

                <div class="form-group">
                    <label>Ảnh đại diện <span style="color:red">*</span></label>
                    <input type="file" name="user_avatar">
                    <?php if (isset($error['user_avatar'])): ?>
                        <p class="text-danger">
                            <?php echo $error['user_avatar'] ?>
                        </p>
                    <?php endif ?>
                </div>

                <div class="form-group">
                    <label>Nơi ở người dùng <span style="color:red">*</span> ( tối đa 200 chữ )</label>
                    <input type="text" name="user_address" value="<?php echo $user_address ?>" class="form-control">
                    <?php if (isset($error['user_address'])): ?>
                        <p class="text-danger">
                            <?php echo $error['user_address'] ?>
                        </p>
                    <?php endif ?>
                </div>

                <div class="form-group">
                    <label>Sinh nhật người dùng <span style="color:red">*</span></label>
                    <input type="date" name="user_birthday" class="form-control">
                    <?php if (isset($error['user_birthday'])): ?>
                        <p class="text-danger">
                            <?php echo $error['user_birthday'] ?>
                        </p>
                    <?php endif ?>
                </div>

                <div class="form-group">
                    <label>Giới tính người dùng <span style="color:red">*</span></label>
                    <input type="radio" name="user_gender" value="0" checked> Nữ
                    <input type="radio" name="user_gender" value="1"> Nam
                </div>

                <div class="form-group">
                    <label>Mô tả người dùng</label>
                    <textarea name="user_desc" id="" cols="30" rows="10"  class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>