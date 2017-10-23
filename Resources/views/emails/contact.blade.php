<body>
	<div style="font-weight: bold;"> Zadano pytanie poprzez formularz na stronie hcka.pl WERSJA 2</div>
	<div><b>Data wysłania: </b>{{ $contact->created_at }}</div>
	<div><b>Imię i nazwisko: </b>{{ $contact->name }}</div>
	<div><b>E-mail: </b>{{ $contact->email }}</div>
	<div><b>Temat wiadomości: </b>{{ $contact->themes }} </div>
	<div><b>Treść wiadomości: </b> </div>
	<div>{{ $contact->message }}</div>
</body>