<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>船舶靠泊時間計算器</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            padding: 40px;
            color: #333;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 25px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="number"], select {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }
        button:hover {
            background-color: #2980b9;
        }
        .result {
            margin-top: 25px;
            padding: 15px;
            border-radius: 4px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }
        .long-berth {
            background-color: #fadbd8;
            color: #78281f;
            border: 1px solid #f5b7b1;
        }
        .normal-berth {
            background-color: #d4efdf;
            color: #145a32;
            border: 1px solid #abebc6;
        }
        .error-msg {
            background-color: #fdebd0;
            color: #7e5109;
            border: 1px solid #fad7a0;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>🚢 船舶靠泊時間計算器</h2>
    
    <form method="POST" action="">
        <div class="form-group">
            <label for="duration">輸入靠泊時間：</label>
            <input type="number" id="duration" name="duration" step="any" placeholder="請輸入數值" value="<?php echo isset($_POST['duration']) ? htmlspecialchars($_POST['duration']) : ''; ?>">
        </div>
        
        <div class="form-group">
            <label for="unit">時間單位 (Unit)：</label>
            <select id="unit" name="unit">
                <option value="hours_zh" <?php echo (isset($_POST['unit']) && $_POST['unit'] == 'hours_zh') ? 'selected' : ''; ?>>小時 (Hours)</option>
                <option value="hours_en" <?php echo (isset($_POST['unit']) && $_POST['unit'] == 'hours_en') ? 'selected' : ''; ?>>Hours (小時)</option>
                <option value="days_zh" <?php echo (isset($_POST['unit']) && $_POST['unit'] == 'days_zh') ? 'selected' : ''; ?>>天數 (Days)</option>
                <option value="days_en" <?php echo (isset($_POST['unit']) && $_POST['unit'] == 'days_en') ? 'selected' : ''; ?>>Days (天數)</option>
            </select>
        </div>
        
        <button type="submit">開始計算</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input_duration = $_POST['duration'];
        $unit = $_POST['unit'];

        // 1. 判斷是否什麼都沒打 (空字串)
        if (trim($input_duration) === '') {
            echo '<div class="result error-msg">請提供資料</div>';
        } else {
            // 轉為浮點數進行數值計算
            $duration = (float)$input_duration;

            // 2. 判斷是否在 0 以下 (包含 0 與負數)
            if ($duration <= 0) {
                echo '<div class="result error-msg">錯誤資料</div>';
            } else {
                // 3. 正常數值換算邏輯
                $total_hours = $duration;

                // 如果單位是天數，則乘以 24 小時
                if ($unit === 'days_zh' || $unit === 'days_en') {
                    $total_hours = $duration * 24;
                }

                // 判斷是否滿 20 小時
                if ($total_hours >= 20) {
                    echo '<div class="result long-berth">🔴 長時間靠泊 (換算：' . $total_hours . ' 小時)</div>';
                } else {
                    echo '<div class="result normal-berth">🟢 一般靠泊 (換算：' . $total_hours . ' 小時)</div>';
                }
            }
        }
    }
    ?>
</div>

</body>
</html>
