<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BenJaponya offers comprehensive support services for Turkish residents in Japan, including visa application, Istanbul tourism guides, residential assistance, and exclusive shopping experiences.">
    <title>BenJaponya</title>
    
    <style>
         * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        #list {
            display: flex;
            justify-content: space-between;
            align-items: center;  /* Aligns children (menu and menu2) on opposite ends */
            width: 100%; /* Ensures the ul element takes full width */
            padding: 0; /* Removes padding */
            list-style-type: none; /* Removes bullet points */
            flex-wrap: wrap;
        }
    
        #menu, #menu2 {
            display: flex;
        }
    
        #menu li, #menu2 li {
            margin-right: 10px; /* Adds spacing between items */
            margin-left: 10px;
        }
        #menu {
            align-items: center;
            display: flex;  
            margin-right: auto; /* This pushes #menu to the center */
            margin-left: auto; /* Aligns items vertically in the center if needed */
        }
        #menu li {
            margin-right: 20px; /* Adds spacing between items */
        }
    
        #menu li:last-child {
            margin-right: 0; /* Removes margin from the last item to avoid extra space */
        }
    
        #menu2 {
            align-items: center; /* Aligns items vertically in the center if needed */
        }


        header {
            background-color: #f8f9fa;
            padding: 10px 20px;
            border-bottom: 1px solid #ccc;
            background-size: cover;
            color: #fff;
            text-align: center;
            background-image: url('./img/istabul.jpg');
            background-position: center;
            background-blend-mode: multiply;
        }
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
        }

        #tr {
            width: 200px;
            height: auto;
        }

        .name {
            font-size: 2rem;
            margin: 0 20px;
        }

        li img {
            height: 30px;
        }

        nav {
            background-color: #007BFF;
            color: #ffffff;
            padding: 10px 20px;
            border-bottom: 1px solid #ccc;
            text-align: center;
        }

        nav li {
            list-style: none;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            font-size: 1.2rem;
        }

        nav ul li a {
            color: #ffffff;
            text-decoration: none;
        }


        

        .inner {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            flex-direction: column;
            align-items: stretch;
        }

        .box, .box.reverse {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 20px 0;
            padding: 20px;
            background: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .box {
            flex-direction: row;
        }

        .contact-container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            flex-direction: column; /* Change this */
        }

        .box__body, .box__image {
            flex: 1;
        }

        main {
            flex: 3;
            padding: 20px;
            overflow-y: auto;
            width: 100%;
            margin: 20px auto;
            background: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        @media (max-width: 768px) {
            .box, .box.reverse {
                flex-direction: column;
            }

            .box__image, .box.reverse .box__image {
                order: -1;
            }

            .box__body, .box.reverse .box__body {
                order: 1;
            }

            .contact-container {
                flex-direction: column;
            }

            .contact-form, .pricing-table {
                margin-right: 0;
                margin-bottom: 20px;
            }
            #menu, #menu2 {
            display: block;
            text-align: center;
            }
            #menu li, #menu2 li {
                margin-right: 0;
                margin-bottom: 10px;
            }
           
        }

        
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            margin-bottom: 10px;
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .contact-container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            flex-direction: column; /* Change this */
        }

        

        .contact-form form {
            display: flex;
            flex-direction: column;
        }

        .contact-form label {
            font-size: 1rem;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .contact-form input[type="text"],
        .contact-form input[type="email"],
        .contact-form textarea {
            padding: 10px;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .contact-form button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .contact-form button:hover {
            background-color: #0056b3;
        }

        .contact-form select {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
        }

        .contact-form textarea {
            padding: 10px;
            margin-top: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            height: 200px;
            box-sizing: border-box;
            resize: vertical;
        }

        

        .pricing-table table {
            width: 100%;
            border-collapse: collapse;
        }

        .pricing-table th, .pricing-table td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        .pricing-table th {
            background-color: #f8f9fa;
        }
        .contact-form,
        .pricing-table {
            width: 100%; /* Ensure full width usage */
            margin-bottom: 20px;
        }
        .contact-form {
            padding: 20px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            margin-bottom: 20px; /* Add margin */
        }

        
        

</style>
</head>
<body>
    <header>
        <h1>
            <img src="./img/trjp.png" alt="Logo" id="tr">
            <div class="name">俺Japonyaだもん</div>
            
        </h1>
    </header>
    <nav>
        <ul id="list">
            <div id="menu">
                <li><a href="./index.html">ホーム</a></li>
                <li><a href="benjaponyaNews.html">ニュース</a></li>
                <li><a href="benjaponyaBlog.html">ブログ</a></li>
                <li><a href="benjaponyaTips.html">豆知識</a></li>
                <li><a href="contact.php">問い合わせ</a></li>
               
            </div>
            <div id="menu2">
                <li>
                    <a href="https://youtube.com/@benjaponya?si=upaHXSwsehbNQ5Ol" target="_blank" class="youtube-button">
                    <img src="./img/youtubelogo.png" alt="Subscribe to our YouTube channel" class="youtube">
                </a>
                </li>
                <li>
                <a href="https://www.instagram.com/benjaponya" target="_blank" class="instagram-button">
                    <img src="./img/Instagramlogo.png" alt="Follow us on Instagram" class="insta" >
                </a>
                </li>
                <li>
                <a href="https://lin.ee/kMhtJuT" target="_blank" class="LINE-button">
                    <img src="./img/LINElogo.png" alt="Connect on LINE" class="line">
                </a>
                </li>
                <li>
                <a href="https://www.facebook.com/profile.php?id=61560351154328" target="_blank" class="LINE-button">
                    <img src="./img/Facebooklogo.png" alt="Follow us on Facebook" class="Facebook">
                </a>
                </li>
                <li>
                <a href="https://x.com/benjaponya7" target="_blank" class="LINE-button">
                    <img src="./img/xlogo1.png" alt="Follow us on x" class="x">
                </a>
                </li>
                <li>
                <a href="https://x.com/benjaponya7" target="_blank" class="LINE-button">
                    <img src="./img/xlogo1.png" alt="Follow us on x" class="x">
                </a>
                </li>
            </div>
        </ul>
    </nav>
    <main>

       
            <div class="pricing-table">
                <!-- 料金表の内容 -->
                <table>
                    <tr>
                        <th>サービス</th>
                        <th>価格</th>
                        <th>内容</th>
                    </tr>
                    <tr>
                        <td>フルイカメットサポート</td>
                        <td>¥100,000</td>
                        <td>イカメットの手続きをお客様と一緒に行います。</td>
                    </tr>
                    <tr>
                        <td>観光サポート</td>
                        <td>¥30,000</td>
                        <td>イスタンブールの観光地巡りに加えて、ホテルの予約、航空券の予約、観光自由時間での電話チャットサポートなどがついています。</td>
                    </tr>
                    <tr>
                        <td>住居選びのサポート</td>
                        <td>¥50,000</td>
                        <td>住居探しが難しいトルコでの日本語ガイドがつく住居探し、また電気、ガス、水道のサポートをして生活ができるようにします。</td>
                    </tr>
                    <tr>
                        <td>買い付けネットショップ</td>
                        <td>¥100,000</td>
                        <td>トルコ雑貨の買い付けから発送まで全て承ります。</td>
                    </tr>
                    <tr>
                        <td>翻訳、通訳サポート</td>
                        <td>¥50,000</td>
                        <td>トルコ国内のトルコ語に対しての翻訳、トルコ語からの日本語への翻訳を行います。またオンラインでの翻訳、映像翻訳なども行っています。</td>
                    </tr>
                </table>
            </div>


        <div class="contact-container">
            <div class="contact-form">
                <!-- お問い合わせフォームの内容 -->
                <form action="http://http://benjaponya.kesug.com/send-email" method="post">
                    <label for="name">名前:</label>
                    <input type="text" id="name" name="name">
                    <label for="email">メールアドレス:</label>
                    <input type="email" id="email" name="email">
                    <label for="service">サービス選択:</label>
                    <select id="service" name="service">
                        <option value="basic">フルイカメットサポート</option>
                        <option value="premium">観光サポート</option>
                        <option value="custom">住居選びのサポート</option>
                        <option value="custom">買い付けネットショップ</option>
                        <option value="custom">翻訳、通訳サポート</option>
                        <option value="custom">その他</option>
                    </select>
                    <label for="message">メッセージ:</label>
                    <textarea id="message" name="message"></textarea>
                    <button type="submit">送信</button>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <p>© 2024 俺Japonyaだもん. All rights reserved.</p>
    </footer>
</body>
</html>