<?php

/*Template Name: Страница контактов*/
get_header('contacts');

global $post;

echo $post->post_content;

?>
 <section class="portfolio wow zoomIn movIn">
    <div class="container">
      <div class="row">
        <div class="col col-sm-5 col-md-5">
			<div class="msg_c"></div>
			<?php
			
			if (isset($_POST['go'])) {
				
				$country = trim(strip_tags($_POST['country']));
				$name = trim(strip_tags($_POST['name']));
				$email = trim(strip_tags($_POST['email']));
				$phone = trim(strip_tags($_POST['phone']));
				
				if (empty($country) or empty($name) or empty($email) or empty($phone)) {
					if (get_locale() == 'ru_RU') {
						echo '<div class="alert alert-warning">Пожалуйста, заполните форму полностью!</div>';
					}
					else {
						echo '<div class="alert alert-warning">Please fill out the form below!</div>';
					}
				}
				elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					if (get_locale() == 'ru_RU') {
						echo '<div class="alert alert-warning">Некорректный E-mail!</div>';
					}
					else {
						echo '<div class="alert alert-warning">Wrong Email!</div>';
					}
				}
				else {
					
					/* Headers */
					$headers = 'FROM: <noreply@tehdet.ru>'.PHP_EOL;
					$headers .= 'Content-Type: text/html; charset=utf-8;'.PHP_EOL;
					$subject = 'New Order';
					
					$to = 'support@it-worlds.com';
					
					$message = 'Hello, Admin!<br /><br />';
					$message .= 'There is a new order from a client!<br /><br />';
					$message .= 'Name: '.$name.'<br />';
					$message .= 'E-mail: '.$email.'<br />';
					$message .= 'Phone: '.$phone.'<br /><br />';
					$message .= '<i>This is an automatically notification, no need to reply!</i>';
					
					if (mail($to, $subject, $message, $headers)) {
						if (get_locale() == 'ru_RU') {
							echo '<div class="alert alert-success">Спасибо!<br />Ваша заявка была отправлена! Наши менеджеры свяжутся с Вами в течение 24-х часов!</div>';
						}
						else {
							echo '<div class="alert alert-success">Thank you!<br />Your order has been sent!</div>';
						}
					}
					else {
						echo '<div class="alert alert-warning">An error has occured!</div>';
					}
					
				}
				
			}
			
			?>
			<?php
			
			if (get_locale() == 'ru_RU') {
				
			?>
			<form action="" method="GET" class="contacts">
				<input type="hidden" name="action" value="order">
				<p>Страна:</p>
				<select name="country" class="form-control">
<option value="0">Абхазия</option>
<option value="1">Австралия</option>
<option value="2">Австрия</option>
<option value="3">Азербайджан</option>
<option value="4">Азорскиеострова</option>
<option value="5">Аландскиеострова</option>
<option value="6">Албания</option>
<option value="7">Алжир</option>
<option value="8">АмериканскоеСамоа</option>
<option value="9">Ангилья</option>
<option value="10">Ангола</option>
<option value="11">Андорра</option>
<option value="12">АнтигуаиБарбуда</option>
<option value="13">АнтильскиеОстрова(Нидерландские)</option>
<option value="14">Аомынь(Макао)</option>
<option value="15">Аргентина</option>
<option value="16">Армения</option>
<option value="17">Аруба</option>
<option value="18">Афганистан</option>
<option value="19">БагамскиеОстрова</option>
<option value="20">Бангладеш</option>
<option value="21">Барбадос</option>
<option value="22">Бахрейн</option>
<option value="23">Белиз</option>
<option value="24">Белоруссия</option>
<option value="25">Бельгия</option>
<option value="26">Бенин</option>
<option value="27">БермудскиеОстрова</option>
<option value="28">Болгария</option>
<option value="29">Боливия</option>
<option value="30">БоснияиГерцеговина</option>
<option value="31">Ботсвана</option>
<option value="32">Бразилия</option>
<option value="33">Бруней</option>
<option value="34">Буркина-Фасо</option>
<option value="35">Бурунди</option>
<option value="36">Бутан</option>
<option value="37">Вазиристан</option>
<option value="38">Вануату</option>
<option value="39">Ватикан</option>
<option value="40">Великобритания</option>
<option value="41">Венгрия</option>
<option value="42">Венесуэла</option>
<option value="43">ВиргинскиеОстрова</option>
<option value="44">ВиргинскиеОстрова</option>
<option value="45">ВосточныйТимор</option>
<option value="46">Вьетнам</option>
<option value="47">Габон</option>
<option value="48">Гавайи</option>
<option value="49">Гаити</option>
<option value="50">Гайана</option>
<option value="51">Гамбия</option>
<option value="52">Гана</option>
<option value="53">Гваделупа</option>
<option value="54">Гватемала</option>
<option value="55">Гвиана</option>
<option value="56">Гвинея</option>
<option value="57">Гвинея-Бисау</option>
<option value="58">Германия</option>
<option value="59">Гернси</option>
<option value="60">Гибралтар</option>
<option value="61">Гондурас</option>
<option value="62">Гонконг</option>
<option value="63">Гренада</option>
<option value="64">Гренландия</option>
<option value="65">Греция</option>
<option value="66">Грузия</option>
<option value="67">Гуам</option>
<option value="68">Дания</option>
<option value="69">Джерси</option>
<option value="70">Джибути</option>
<option value="71">Доминика</option>
<option value="72">ДоминиканскаяРеспублика</option>
<option value="73">Египет</option>
<option value="74">Замбия</option>
<option value="75">ЗападнаяСахара</option>
<option value="76">Зимбабве</option>
<option value="77">Израиль</option>
<option value="78">Индия</option>
<option value="79">Индонезия</option>
<option value="80">Иордания</option>
<option value="81">Ирак</option>
<option value="82">Иран</option>
<option value="83">Ирландия</option>
<option value="84">Исландия</option>
<option value="85">Испания</option>
<option value="86">Италия</option>
<option value="87">Йемен</option>
<option value="88">Кабо-Верде</option>
<option value="89">Казахстан</option>
<option value="90">КаймановыОстрова</option>
<option value="91">Камбоджа</option>
<option value="92">Камерун</option>
<option value="93">Канада</option>
<option value="94">Канарскиеострова</option>
<option value="95">Катар</option>
<option value="96">Кения</option>
<option value="97">Кипр</option>
<option value="98">Киргизия</option>
<option value="99">Кирибати</option>
<option value="100">Китай</option>
<option value="101">КокосовыеОстрова</option>
<option value="102">Колумбия</option>
<option value="103">КоморскиеОстрова</option>
<option value="104">РеспубликаКонго</option>
<option value="105">Конго,ДемократическаяРеспублика</option>
<option value="106">Корея(Северная)</option>
<option value="107">Корея(Южная)</option>
<option value="108">Косово</option>
<option value="109">Коста-Рика</option>
<option value="110">Кот-д'Ивуар</option>
<option value="111">Куба</option>
<option value="112">Кувейт</option>
<option value="113">Кукаострова</option>
<option value="114">Лаос</option>
<option value="115">Латвия</option>
<option value="116">Лесото</option>
<option value="117">Либерия</option>
<option value="118">Ливан</option>
<option value="119">Ливия</option>
<option value="120">Литва</option>
<option value="121">Лихтенштейн</option>
<option value="122">Люксембург</option>
<option value="123">Маврикий</option>
<option value="124">Мавритания</option>
<option value="125">Мадагаскар</option>
<option value="126">Мадейра(острова)</option>
<option value="127">Майотта</option>
<option value="128">Македония</option>
<option value="129">Малави</option>
<option value="130">Малайзия</option>
<option value="131">Мали</option>
<option value="132">МалыеТихоокеанскиеОстроваСША</option>
<option value="133">Мальдивы</option>
<option value="134">Мальта</option>
<option value="135">Марокко</option>
<option value="136">Мартиника</option>
<option value="137">МаршалловыОстрова</option>
<option value="138">Мексика</option>
<option value="139">Мелилья</option>
<option value="140">Микронезия</option>
<option value="141">Мозамбик</option>
<option value="142">Молдавия</option>
<option value="143">Монако</option>
<option value="144">Монголия</option>
<option value="145">Монтсеррат</option>
<option value="146">Мьянма</option>
<option value="147">Мэн</option>
<option value="148">НагорныйКарабах(Арцах)</option>
<option value="149">Намибия</option>
<option value="150">Науру</option>
<option value="151">Непал</option>
<option value="152">Нигер</option>
<option value="153">Нигерия</option>
<option value="154">Нидерланды</option>
<option value="155">Никарагуа</option>
<option value="156">Ниуэ</option>
<option value="157">НоваяЗеландия</option>
<option value="158">НоваяКаледония</option>
<option value="159">Норвегия</option>
<option value="160">Норфолк</option>
<option value="161">ОбъединенныеАрабскиеЭмираты</option>
<option value="162">Оман</option>
<option value="163">Пакистан</option>
<option value="164">Палау</option>
<option value="165">Палестина</option>
<option value="166">Панама</option>
<option value="167">Папуа</option>
<option value="168">Парагвай</option>
<option value="169">Перу</option>
<option value="170">Питкэрн</option>
<option value="171">Польша</option>
<option value="172">Португалия</option>
<option value="173">Приднестровье</option>
<option value="174">Пуэрто-Рико</option>
<option value="175">Реюньон</option>
<option value="176">РождестваОстров</option>
<option value="177">Россия—РоссийскаяФедерация-РФ</option>
<option value="178">Руанда</option>
<option value="179">Румыния</option>
<option value="180">Сальвадор</option>
<option value="181">Самоа</option>
<option value="182">Сан-Марино</option>
<option value="183">Сан-ТомеиПринсипи</option>
<option value="184">СаудовскаяАравия</option>
<option value="185">Свазиленд</option>
<option value="186">Свальбард</option>
<option value="187">СвятойЕленыОстров</option>
<option value="188">СеверныеМарианскиеострова</option>
<option value="189">СеверныйКипр</option>
<option value="190">Сейшельскиеострова</option>
<option value="191">Сенегал</option>
<option value="192">Сен-ПьериМикелон</option>
<option value="193">Сент-ВинсентиГренадины</option>
<option value="194">Сент-КитсиНевис</option>
<option value="195">Сент-Люсия</option>
<option value="196">Сербия</option>
<option value="197">Сеута</option>
<option value="198">Сингапур</option>
<option value="199">Сирия</option>
<option value="200">Словакия</option>
<option value="201">Словения</option>
<option value="202">СоединенныеШтатыАмерики—США</option>
<option value="203">СоломоновыОстрова</option>
<option value="204">Сомали</option>
<option value="205">Сомалиленд</option>
<option value="206">Судан</option>
<option value="207">Суринам</option>
<option value="208">Сьерра-Леоне</option>
<option value="209">Таджикистан</option>
<option value="210">Таиланд</option>
<option value="211">Тайвань</option>
<option value="212">Тамил-Илам</option>
<option value="213">Танзания</option>
<option value="214">ТёрксиКайкос</option>
<option value="215">Того</option>
<option value="216">Токелау</option>
<option value="217">Тонга</option>
<option value="218">ТринидадиТобаго</option>
<option value="219">Тувалу</option>
<option value="220">Тунис</option>
<option value="221">Туркмения—Туркменистан</option>
<option value="222">Турция</option>
<option value="223">Уганда</option>
<option value="224">Узбекистан</option>
<option value="225">Украина</option>
<option value="226">УоллисиФутуна</option>
<option value="227">Уругвай</option>
<option value="228">ФарерскиеОстрова</option>
<option value="229">Фиджи</option>
<option value="230">Филиппины</option>
<option value="231">Финляндия</option>
<option value="232">ФолклендскиеОстрова</option>
<option value="233">Франция</option>
<option value="234">ФранцузскаяПолинезия</option>
<option value="235">ФранцузскиеЮжныеТерритории</option>
<option value="236">Хорватия</option>
<option value="237">ЦентральноафриканскаяРеспублика(ЦАР)</option>
<option value="238">Чад</option>
<option value="239">Черногория</option>
<option value="240">Чехия</option>
<option value="241">Чили</option>
<option value="242">Швейцария</option>
<option value="243">Швеция</option>
<option value="244">Шри-Ланка</option>
<option value="245">Эквадор</option>
<option value="246">ЭкваториальнаяГвинея</option>
<option value="247">Эритрея</option>
<option value="248">Эстония</option>
<option value="249">Эфиопия</option>
<option value="250">ЮжнаяГеоргияиЮжныеСандвичевыострова</option>
<option value="251">ЮжнаяОсетия</option>
<option value="252">Южно-АфриканскаяРеспублика(ЮАР)</option>
<option value="253">Ямайка</option>
<option value="254">Япония</option>				
				</select>
				<p>Ваше имя:</p>
				<input type="text" name="name" placeholder="Как к Вам обращаться?" class="form-control">
				<p>Ваш E-mail:</p>
				<input type="email" name="email" placeholder="name@domain.com" class="form-control">
				<p>Телефон:</p>
				<input type="text" name="phone" placeholder="В международном формате" class="form-control">
<script src="https://www.google.com/recaptcha/api.js?render=_6Lfzc9EUAAAAABFYE04cBqdb0up7i4ybnjFYfJLU"></script>
<br />
<div class="g-recaptcha" data-sitekey="6Lfzc9EUAAAAABFYE04cBqdb0up7i4ybnjFYfJLU"></div>
<script>
grecaptcha.ready(function() {
    grecaptcha.execute('6Lfzc9EUAAAAABFYE04cBqdb0up7i4ybnjFYfJLU', {action: 'homepage'}).then(function(token) {
      alert('y');
    });
});
</script>
				<input type="button" name="go" value="Оформить заявку" class="order_btn submit">
			</form>
			<?php
			
			}
			else {
				
				?>
			<form action="" method="POST" class="contacts">
				<input type="hidden" name="action" value="order">
				<p>Country:</p>
				<select name="country" class="form-control">
					<option value="">Select</option>
	<option value="AX">AALAND ISLANDS</option>
	<option value="AF">AFGHANISTAN</option>
	<option value="AL">ALBANIA</option>
	<option value="DZ">ALGERIA</option>
	<option value="AS">AMERICAN SAMOA</option>
	<option value="AD">ANDORRA</option>
	<option value="AO">ANGOLA</option>
	<option value="AI">ANGUILLA</option>
	<option value="AQ">ANTARCTICA</option>
	<option value="AG">ANTIGUA AND BARBUDA</option>
	<option value="AR">ARGENTINA</option>
	<option value="AM">ARMENIA</option>
	<option value="AW">ARUBA</option>
	<option value="AU">AUSTRALIA</option>
	<option value="AT">AUSTRIA</option>
	<option value="AZ">AZERBAIJAN</option>
	<option value="BS">BAHAMAS</option>
	<option value="BH">BAHRAIN</option>
	<option value="BD">BANGLADESH</option>
	<option value="BB">BARBADOS</option>
	<option value="BY">BELARUS</option>
	<option value="BE">BELGIUM</option>
	<option value="BZ">BELIZE</option>
	<option value="BJ">BENIN</option>
	<option value="BM">BERMUDA</option>
	<option value="BT">BHUTAN</option>
	<option value="BO">BOLIVIA</option>
	<option value="BA">BOSNIA AND HERZEGOWINA</option>
	<option value="BW">BOTSWANA</option>
	<option value="BV">BOUVET ISLAND</option>
	<option value="BR">BRAZIL</option>
	<option value="IO">BRITISH INDIAN OCEAN TERRITORY</option>
	<option value="BN">BRUNEI DARUSSALAM</option>
	<option value="BG">BULGARIA</option>
	<option value="BF">BURKINA FASO</option>
	<option value="BI">BURUNDI</option>
	<option value="KH">CAMBODIA</option>
	<option value="CM">CAMEROON</option>
	<option value="CA">CANADA</option>
	<option value="CV">CAPE VERDE</option>
	<option value="KY">CAYMAN ISLANDS</option>
	<option value="CF">CENTRAL AFRICAN REPUBLIC</option>
	<option value="TD">CHAD</option>
	<option value="CL">CHILE</option>
	<option value="CN">CHINA</option>
	<option value="CX">CHRISTMAS ISLAND</option>
	<option value="CO">COLOMBIA</option>
	<option value="KM">COMOROS</option>
	<option value="CK">COOK ISLANDS</option>
	<option value="CR">COSTA RICA</option>
	<option value="CI">COTE D'IVOIRE</option>
	<option value="CU">CUBA</option>
	<option value="CY">CYPRUS</option>
	<option value="CZ">CZECH REPUBLIC</option>
	<option value="DK">DENMARK</option>
	<option value="DJ">DJIBOUTI</option>
	<option value="DM">DOMINICA</option>
	<option value="DO">DOMINICAN REPUBLIC</option>
	<option value="EC">ECUADOR</option>
	<option value="EG">EGYPT</option>
	<option value="SV">EL SALVADOR</option>
	<option value="GQ">EQUATORIAL GUINEA</option>
	<option value="ER">ERITREA</option>
	<option value="EE">ESTONIA</option>
	<option value="ET">ETHIOPIA</option>
	<option value="FO">FAROE ISLANDS</option>
	<option value="FJ">FIJI</option>
	<option value="FI">FINLAND</option>
	<option value="FR">FRANCE</option>
	<option value="GF">FRENCH GUIANA</option>
	<option value="PF">FRENCH POLYNESIA</option>
	<option value="TF">FRENCH SOUTHERN TERRITORIES</option>
	<option value="GA">GABON</option>
	<option value="GM">GAMBIA</option>
	<option value="GE">GEORGIA</option>
	<option value="DE">GERMANY</option>
	<option value="GH">GHANA</option>
	<option value="GI">GIBRALTAR</option>
	<option value="GR">GREECE</option>
	<option value="GL">GREENLAND</option>
	<option value="GD">GRENADA</option>
	<option value="GP">GUADELOUPE</option>
	<option value="GU">GUAM</option>
	<option value="GT">GUATEMALA</option>
	<option value="GN">GUINEA</option>
	<option value="GW">GUINEA-BISSAU</option>
	<option value="GY">GUYANA</option>
	<option value="HT">HAITI</option>
	<option value="HM">HEARD AND MC DONALD ISLANDS</option>
	<option value="HN">HONDURAS</option>
	<option value="HK">HONG KONG</option>
	<option value="HU">HUNGARY</option>
	<option value="IS">ICELAND</option>
	<option value="IN">INDIA</option>
	<option value="ID">INDONESIA</option>
	<option value="IQ">IRAQ</option>
	<option value="IE">IRELAND</option>
	<option value="IL">ISRAEL</option>
	<option value="IT">ITALY</option>
	<option value="JM">JAMAICA</option>
	<option value="JP">JAPAN</option>
	<option value="JO">JORDAN</option>
	<option value="KZ">KAZAKHSTAN</option>
	<option value="KE">KENYA</option>
	<option value="KI">KIRIBATI</option>
	<option value="KW">KUWAIT</option>
	<option value="KG">KYRGYZSTAN</option>
	<option value="LA">LAO PEOPLE'S DEMOCRATIC REPUBLIC</option>
	<option value="LV">LATVIA</option>
	<option value="LB">LEBANON</option>
	<option value="LS">LESOTHO</option>
	<option value="LR">LIBERIA</option>
	<option value="LY">LIBYAN ARAB JAMAHIRIYA</option>
	<option value="LI">LIECHTENSTEIN</option>
	<option value="LT">LITHUANIA</option>
	<option value="LU">LUXEMBOURG</option>
	<option value="MO">MACAU</option>
	<option value="MG">MADAGASCAR</option>
	<option value="MW">MALAWI</option>
	<option value="MY">MALAYSIA</option>
	<option value="MV">MALDIVES</option>
	<option value="ML">MALI</option>
	<option value="MT">MALTA</option>
	<option value="MH">MARSHALL ISLANDS</option>
	<option value="MQ">MARTINIQUE</option>
	<option value="MR">MAURITANIA</option>
	<option value="MU">MAURITIUS</option>
	<option value="YT">MAYOTTE</option>
	<option value="MX">MEXICO</option>
	<option value="MC">MONACO</option>
	<option value="MN">MONGOLIA</option>
	<option value="MS">MONTSERRAT</option>
	<option value="MA">MOROCCO</option>
	<option value="MZ">MOZAMBIQUE</option>
	<option value="MM">MYANMAR</option>
	<option value="NA">NAMIBIA</option>
	<option value="NR">NAURU</option>
	<option value="NP">NEPAL</option>
	<option value="NL">NETHERLANDS</option>
	<option value="AN">NETHERLANDS ANTILLES</option>
	<option value="NC">NEW CALEDONIA</option>
	<option value="NZ">NEW ZEALAND</option>
	<option value="NI">NICARAGUA</option>
	<option value="NE">NIGER</option>
	<option value="NG">NIGERIA</option>
	<option value="NU">NIUE</option>
	<option value="NF">NORFOLK ISLAND</option>
	<option value="MP">NORTHERN MARIANA ISLANDS</option>
	<option value="NO">NORWAY</option>
	<option value="OM">OMAN</option>
	<option value="PK">PAKISTAN</option>
	<option value="PW">PALAU</option>
	<option value="PA">PANAMA</option>
	<option value="PG">PAPUA NEW GUINEA</option>
	<option value="PY">PARAGUAY</option>
	<option value="PE">PERU</option>
	<option value="PH">PHILIPPINES</option>
	<option value="PN">PITCAIRN</option>
	<option value="PL">POLAND</option>
	<option value="PT">PORTUGAL</option>
	<option value="PR">PUERTO RICO</option>
	<option value="QA">QATAR</option>
	<option value="RE">REUNION</option>
	<option value="RO">ROMANIA</option>
	<option selected value="RU">RUSSIAN FEDERATION</option>
	<option value="RW">RWANDA</option>
	<option value="SH">SAINT HELENA</option>
	<option value="KN">SAINT KITTS AND NEVIS</option>
	<option value="LC">SAINT LUCIA</option>
	<option value="PM">SAINT PIERRE AND MIQUELON</option>
	<option value="VC">SAINT VINCENT AND THE GRENADINES</option>
	<option value="WS">SAMOA</option>
	<option value="SM">SAN MARINO</option>
	<option value="ST">SAO TOME AND PRINCIPE</option>
	<option value="SA">SAUDI ARABIA</option>
	<option value="SN">SENEGAL</option>
	<option value="CS">SERBIA AND MONTENEGRO</option>
	<option value="SC">SEYCHELLES</option>
	<option value="SL">SIERRA LEONE</option>
	<option value="SG">SINGAPORE</option>
	<option value="SK">SLOVAKIA</option>
	<option value="SI">SLOVENIA</option>
	<option value="SB">SOLOMON ISLANDS</option>
	<option value="SO">SOMALIA</option>
	<option value="ZA">SOUTH AFRICA</option>
	<option value="GS">SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS</option>
	<option value="ES">SPAIN</option>
	<option value="LK">SRI LANKA</option>
	<option value="SD">SUDAN</option>
	<option value="SR">SURINAME</option>
	<option value="SJ">SVALBARD AND JAN MAYEN ISLANDS</option>
	<option value="SZ">SWAZILAND</option>
	<option value="SE">SWEDEN</option>
	<option value="CH">SWITZERLAND</option>
	<option value="SY">SYRIAN ARAB REPUBLIC</option>
	<option value="TW">TAIWAN</option>
	<option value="TJ">TAJIKISTAN</option>
	<option value="TH">THAILAND</option>
	<option value="TL">TIMOR-LESTE</option>
	<option value="TG">TOGO</option>
	<option value="TK">TOKELAU</option>
	<option value="TO">TONGA</option>
	<option value="TT">TRINIDAD AND TOBAGO</option>
	<option value="TN">TUNISIA</option>
	<option value="TR">TURKEY</option>
	<option value="TM">TURKMENISTAN</option>
	<option value="TC">TURKS AND CAICOS ISLANDS</option>
	<option value="TV">TUVALU</option>
	<option value="UG">UGANDA</option>
	<option value="UA">UKRAINE</option>
	<option value="AE">UNITED ARAB EMIRATES</option>
	<option value="GB">UNITED KINGDOM</option>
	<option value="US">UNITED STATES</option>
	<option value="UM">UNITED STATES MINOR OUTLYING ISLANDS</option>
	<option value="UY">URUGUAY</option>
	<option value="UZ">UZBEKISTAN</option>
	<option value="VU">VANUATU</option>
	<option value="VE">VENEZUELA</option>
	<option value="VN">VIET NAM</option>
	<option value="WF">WALLIS AND FUTUNA ISLANDS</option>
	<option value="EH">WESTERN SAHARA</option>
	<option value="YE">YEMEN</option>
	<option value="ZM">ZAMBIA</option>
	<option value="ZW">ZIMBABWE</option>
				</select>
				<p>Your Name:</p>
				<input type="text" name="name" placeholder="eg. John Doe" class="form-control">
				<p>Your E-mail:</p>
				<input type="email" name="email" placeholder="name@domain.com" class="form-control">
				<p>Phone Number:</p>
				<input type="text" name="phone" placeholder="" class="form-control">
<script src="https://www.google.com/recaptcha/api.js?render=_6Lfzc9EUAAAAABFYE04cBqdb0up7i4ybnjFYfJLU"></script>
<br />
<div class="g-recaptcha" data-sitekey="6Lfzc9EUAAAAABFYE04cBqdb0up7i4ybnjFYfJLU"></div>
<script>
grecaptcha.ready(function() {
    grecaptcha.execute('6Lfzc9EUAAAAABFYE04cBqdb0up7i4ybnjFYfJLU', {action: 'homepage'}).then(function(token) {
      alert('y');
    });
});
</script>
				<input type="button" name="go" value="Order Now" class="order_btn submit">
			</form>				
				<?php
				
			}
			
			?>
		</div>
      </div>
    </div>
 </section>
<?php

get_footer('contacts');

?>
