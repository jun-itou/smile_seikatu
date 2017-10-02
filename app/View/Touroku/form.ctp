<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="reset/css" href="./css/reset.css">
        <link rel="stylesheet" type="text/css" href="./css/form2.css">
        <script language="javascript" type="text/javascript" src="./js/form.js"></script>
        <script src="./js/ajaxzip3.js.ダウンロード" charset="UTF-8"></script>
        <script type="text/javascript" src="http://jsdo.it/lib/jquery-1.10.2/js"></script>
        <title>お客さま情報入力|酢まいる生活</title>
</head>
<body >
<!---                ナビゲーションメニュー                    -->
        <header>
            <nav>
                <ul id="menu">
                    <li id="menu01"><a href="#" title="">All VINES</a></li>
                    <li id="menu02"><a href="#" title="">Japanese VINES</a></li>
                    <li id="menu03"><a href="#" title="">World VINES</a></li>
                    <li id="menu04"><a href="#" title="">Recipie</a></li>
                    <li id="menu05"><a href="#" title="">Beuty</a></li>
                    <li id="menu06"><a href="#" title="">Contact</a></li>
                    <li id="login"><a href=""><img src="./img/sign-in-up.png"></a></li>
                    <li id="cart"><a href=""><img src="./img/cart.png"></a></li>
                </ul>
            </nav>
        </header>
        <!---           ../ナビゲーションメニュー         終了          -->
<!-- ここから サンプルフォーム -->
    <div class="content">
        <h4 id="top-title">お客さま情報を入力してください　<span class="hissu">(※マークは必須)</span></h4>
        <form id="myform" method="post">
            <table>
                <tbody>
                    <tr id="username"><!---  ユーザー名   -->
                        <td class="input" id="uname_outer">ユーザー名<span class="hissu">※</span></td>
                        <td><input type="text" name="uname" size="50" value="" placeholder="入力はこちら"></td>
                        <td> <span class="errmsg" id="uname_msg"></span></td>
                        </tr>
                    <tr id="namae"><!---  名前   -->
                        <td class="input" id="fname_outer">名前<span class="hissu">※</span></td>
                        <td><input type="text" name="fname" value="" placeholder="例）山田">  <input type="text" value="" placeholder="例）太郎"></td>
                        <td> <span class="errmsg" id="fname_msg"></span></td>
                        </tr>
                    <tr id="furigana"><!---  フリガナ   -->
                        <td class="input" id="fkana_outer">フリガナ<span class="hissu">※</span></td>
                        <td>
                            <input type="text" name="fkana" value="" placeholder="例)ヤマダ">  
                            <input type="text" value="" placeholder="例)タロウ">
                        </td>
                            <td> <span class="errmsg" id="fkana_msg"></span></td>
                        </tr>
                    <tr id="seibetu"><!---  性別   -->
                        <td class="input" id="fsex_outer">性別<span class="hissu">※</span></td>
                        <td>
                            <select name="fsex" style="width:110px;">
                                <option value="">選択</option>
                                <option value="男性">男性</option>
                                <option value="女性">女性</option>
                                <option value="不明">不明</option>
                            </select>
                        </td>
                        <td> <span class="errmsg" id="fsex_msg"></span></td>
                        </tr>
                    <tr id="seinen"><!---  生年月日   -->
                        <td class="input" id="fbirth_outer">生年月日<span class="hissu">※</span></td>
                        <td>
                            <input type="tel" value="" name="fbirth" maxlength="8" placeholder="19900101">
                        </td>
                        <td> <span class="errmsg" id="fbirth_msg"></span></td>
                        </tr>
                    <tr id="password"><!---  パスワード   -->
                        <td class="input" id="pass1_outer">パスワード<span class="hissu">※</span></td>
                        <td><span class="password">
                                    <p id="pass1-error" class="alert-error"></p>
                                    <p id="pass1-error2" class="alert-error"></p>
                                    <input type="password" size="50" id="pass1" name="pass1" value="" class="span2" maxlength="12" style="ime-mode:disabled;" placeholder="※半角英数字で6文字以上12文字以下">
                                    <input type="button" id="openPassButton" class="btn btn-mini btn-info" value="表示">
                                </span>
                            </td>
                        <td> <span class="errmsg" id="pass1_msg"></span></td>
                        </tr>
                    <tr id="password2"><!---  パスワード(再確認)   -->
                        <td class="input" id="pass2_outer">パスワード(再確認)<span class="hissu">※</span></td>
                        <td>
                            <span class="password2">
                                <p id="pass2-error" class="alert-error"></p>
                                <input type="password" size="50" id="pass2" name="pass2" value=""  class="span2" maxlength="12" style="ime-mode:disabled;" placeholder=" 確認の為、再入力してください">
                            </span></td>
                        <td> <span class="errmsg" id="pass2_msg"></span></td>
                        </tr>
                    <tr id="nenrei"><!---  年齢   -->
                        <td class="input" id="fageage_outer">年齢<span class="hissu">※</span></td>
                        <td>
                            <select name="fageage" style="width:110px;">
                                <option value="">選択</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                                <option value="32">32</option>
                                <option value="33">33</option>
                                <option value="34">34</option>
                                <option value="35">35</option>
                                <option value="36">36</option>
                                <option value="37">37</option>
                                <option value="38">38</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                                <option value="44">44</option>
                                <option value="45">45</option>
                                <option value="46">46</option>
                                <option value="47">47</option>
                                <option value="48">48</option>
                                <option value="49">49</option>
                                <option value="50">50</option>
                                <option value="51">51</option>
                                <option value="52">52</option>
                                <option value="53">53</option>
                                <option value="54">54</option>
                                <option value="55">55</option>
                                <option value="56">56</option>
                                <option value="57">57</option>
                                <option value="58">58</option>
                                <option value="59">59</option>
                                <option value="60">60</option>
                                <option value="61">61</option>
                                <option value="62">62</option>
                                <option value="63">63</option>
                                <option value="64">64</option>
                                <option value="65">65</option>
                                <option value="66">66</option>
                                <option value="67">67</option>
                                <option value="68">68</option>
                                <option value="69">69</option>
                                <option value="70">70</option>
                                <option value="71">71</option>
                                <option value="72">72</option>
                                <option value="73">73</option>
                                <option value="74">74</option>
                                <option value="75">75</option>
                                <option value="76">76</option>
                                <option value="77">77</option>
                                <option value="78">78</option>
                                <option value="79">79</option>
                                <option value="80">80</option>
                                <option value="81">81</option>
                                <option value="82">82</option>
                                <option value="83">83</option>
                                <option value="84">84</option>
                                <option value="85">85</option>
                                <option value="86">86</option>
                                <option value="87">87</option>
                                <option value="88">88</option>
                                <option value="89">89</option>
                                <option value="90">90</option>
                                <option value="91">91</option>
                                <option value="92">92</option>
                                <option value="93">93</option>
                                <option value="94">94</option>
                                <option value="95">95</option>
                                <option value="96">96</option>
                                <option value="97">97</option>
                                <option value="98">98</option>
                                <option value="99">99</option>
                                <option value="100">100</option>
                                <option value="101">101</option>
                                <option value="102">102</option>
                                <option value="103">103</option>
                                <option value="104">104</option>
                                <option value="105">105</option>
                                <option value="106">106</option>
                                <option value="107">107</option>
                                <option value="108">108</option>
                                <option value="109">109</option>
                                <option value="110">110</option>
                            </select>歳
                        </td>
                        <td> <span class="errmsg" id="fageage_msg"></span></td>
                        </tr>
                    <tr id="me-ru"><!---  MAIL   -->
                        <td class="input" id="fmail_outer">メール<span class="hissu">※</span></td>
                        <td>
                            <input type="text" name="fmail" value=""></td>
                            <td> <span class="errmsg" id="fmail_msg"></span></td>
                        </tr>
                    <tr id="me-ru2"><!---  メール   -->
                        <td class="input" id="fmailcopy_outer">メール（再確認）<span class="hissu">※</span></td>
                        <td>
                            <input type="text" name="fmailcopy" value="">
                        </td>
                        </tr>
                    <tr id="denwa"><!---  電話番号   -->
                        <td class="input" id="ftel_outer">電話番号<span class="hissu">※</span></td>
                        <td>
                            <input type="tel" name="ftel" size="5" maxlength="3" placeholder="000"> -
                            <input type="tel" name="example3" size="5" maxlength="4" placeholder="0000"> -
                            <input type="tel" name="example3" size="5" maxlength="4" placeholder="0000">
                        </td>
                        <td> <span class="errmsg" id="ftel_msg"></span></td>
                        </tr>
                    <tr id="yubin"><!---  郵便番号   -->
                        <td class="input" id="zip1_outer">郵便番号〒<span class="hissu">※</span></td>
                            <td>
                                 <input type="text" name="zip1" maxlength="3" size="5"> - <input type="text" name="zip2" maxlength="4" size="5" onKeyUp="AjaxZip3.zip2addr('zip1','zip2','address1','address2');">
                            </td>
                        <td> <span class="errmsg" id="zip1_msg"></span></td>
                        </tr>
                    <tr id="todoufuken"><!---  都道府県   -->
                        <td class="input" id="address1_outer">都道府県<span class="hissu">※</span></td>
                        <td>
                            <select name="address1">
                                <option value="">-- 選択--</option>
                                <option value="北海道">北海道</option>
                                <option value="青森県">青森県</option>
                                <option value="岩手県">岩手県</option>
                                <option value="宮城県">宮城県</option>
                                <option value="秋田県">秋田県</option>
                                <option value="山形県">山形県</option>
                                <option value="福島県">福島県</option>
                                <option value="茨城県">茨城県</option>
                                <option value="栃木県">栃木県</option>
                                <option value="群馬県">群馬県</option>
                                <option value="埼玉県">埼玉県</option>
                                <option value="千葉県">千葉県</option>
                                <option value="東京都">東京都</option>
                                <option value="神奈川県">神奈川県</option>
                                <option value="新潟県">新潟県</option>
                                <option value="富山県">富山県</option>
                                <option value="石川県">石川県</option>
                                <option value="福井県">福井県</option>
                                <option value="山梨県">山梨県</option>
                                <option value="長野県">長野県</option>
                                <option value="岐阜県">岐阜県</option>
                                <option value="静岡県">静岡県</option>
                                <option value="愛知県">愛知県</option>
                                <option value="三重県">三重県</option>
                                <option value="滋賀県">滋賀県</option>
                                <option value="京都府">京都府</option>
                                <option value="大阪府">大阪府</option>
                                <option value="兵庫県">兵庫県</option>
                                <option value="奈良県">奈良県</option>
                                <option value="和歌山県">和歌山県</option>
                                <option value="鳥取県">鳥取県</option>
                                <option value="島根県">島根県</option>
                                <option value="岡山県">岡山県</option>
                                <option value="広島県">広島県</option>
                                <option value="山口県">山口県</option>
                                <option value="徳島県">徳島県</option>
                                <option value="香川県">香川県</option>
                                <option value="愛媛県">愛媛県</option>
                                <option value="高知県">高知県</option>
                                <option value="福岡県">福岡県</option>
                                <option value="佐賀県">佐賀県</option>
                                <option value="長崎県">長崎県</option>
                                <option value="熊本県">熊本県</option>
                                <option value="大分県">大分県</option>
                                <option value="宮崎県">宮崎県</option>
                                <option value="鹿児島県">鹿児島県</option>
                                <option value="沖縄県">沖縄県</option>
                            </select>
                        </td>
                        <td> <span class="errmsg" id="address1_msg"></span></td>
                        </tr>
                    <tr id="shicyouson"><!---  市区町村   -->
                        <td class="input" id="address2_outer">市区町村<span class="hissu">※</span></td>
                        <td><input type="text" name="address2" size="60"　placeholder="例）東京都千代田区１"></td>
                        <td> <span class="errmsg" id="address2_msg"></span></td>
                        </tr>
                    <tr id="cyoume"><!---  丁目以降   -->
                        <td class="input" id="address3_outer">丁目以降<span class="hissu">※</span></td>
                        <td><input type="text" name="address3" size="60"　placeholder="例）東京都千代田区１"></td>
                        <td> <span class="errmsg" id="address3_msg"></span></td>
                        </tr>
                    <tr id="kiyaku"><!---  規約   -->
                        <td class="input" id="fkiyaku_outer">規約<span class="hissu">※</span></td>
                        <td id="kyaku"><input type="checkbox" name="fkiyaku" value="accept"><span id="doui">同意します</span></td>
                        <td> <span class="errmsg" id="fkiyaku_msg"></span></td>
                        </tr>
                    <tr><!---  BUTTON   -->
                        <td id="sndbtn" colspan=2>
                            <input id="checkPassButton" type="submit" value="次へ進む" >
                            <input type="reset" value="リセット">
                        </td>
                        </tr>
                </tbody>
            </table>
        </form>
    </div>
<!---              フッター                           -->
        <footer>
            <ul id="foot-logo">
                <a href="#"><img src="./img/logo_black.png"></a>
             </ul>
            <ul id="foot-menu">
                <li id="foot-menu01"><a href="#" title="">All VINES</a></li>
                <li id="foot-menu02"><a href="#" title="">Japanese VINES</a></li>
                <li id="foot-menu03"><a href="#" title="">World VINES</a></li>
                <li id="foot-menu04"><a href="#" title="">Recipie</a></li>
                <li id="foot-menu05"><a href="#" title="">Beuty</a></li>
                <li id="foot-menu06"><a href="#" title="">Contact</a></li>
                <li id="facebook"><a href=""><img src="./img/logo_fb.png"></a></li>
                <li id="twiiter"><a href=""><img src="./img/logo_tw.png"></a></li>
                <li id="insta"><a href=""><img src="./img/logo_insta.png"></a></li>
            </ul>
         </footer>
        <address>
            <p id="address">Copyright © 2017 JimsVINES All Rights Reserved.</p>
         </address>
        <!---  ./フッター            終了               -->
    <script type="text/javascript" src="http://jsdo.it/lib/jquery-1.10.2/js"></script>
    <script src="./js/index.js"></script>
</body>
</html>
