# Zawody Wędkarskie — Egzamin INF.03

🎣 Projekt wykonany w ramach egzaminu zawodowego INF.03 — Tworzenie i administrowanie stronami i aplikacjami internetowymi oraz bazami danych.

Projekt obejmuje przygotowanie aplikacji webowej obsługującej zawody wędkarskie wraz z bazą danych oraz interfejsem użytkownika w HTML + CSS + PHP + SQL.

---

## 🧩 Zakres projektu

Zgodnie z poleceniem egzaminacyjnym wykonano:

- Utworzenie bazy danych `wedkarstwo` i import struktury z pliku `baza.sql`
- Wykonanie czterech zapytań SQL:
  - INSERT nowego wpisu do tabeli zawodów
  - SELECT zawodów dla konkretnego sędziego
  - SELECT zwycięzcy zawodów z wykorzystaniem relacji
  - UPDATE punktów dla konkretnego wędkarza
- Zrzuty ekranu wyników zapytań (`kw1.jpg`–`kw4.jpg`)
- Strona HTML `zawody.html` z poprawną strukturą semantyczną i formularzem
- Formularz HTML przesyłający dane do `zgloszenie.php` metodą POST
- Stylizacja CSS w pliku `styl3.css` zgodnie ze specyfikacją (layout blokowy, kolory, typografia, itd.)
- Modyfikacja i osadzenie grafiki `zawody.jpg` (odbicie, skalowanie do 250px wysokości)
- Obsługa formularza w PHP i zapis danych do bazy MySQL
- Plik `przeglądarka.txt` z informacją o użytej przeglądarce do weryfikacji działania strony
- Wszystkie pliki umieszczone w folderze nazwanym numerem PESEL ucznia (zgodnie z instrukcją egzaminacyjną)

---

## 🗂 Struktura plików

- ├── import.png
- ├── kw1.jpg
- ├── kw3.jpg
- ├── kw2.jpg
- ├── kw4.jpg
- ├── kwerendy.txt
- ├── przeglądarka.txt
- ├── styl3.css
- ├── zawody.html
- ├── zawody.jpg
- ├── zgloszenie.php

---

## ⚙️ Technologie

- HTML5
- CSS3
- PHP (MySQLi)
- SQL (MariaDB / phpMyAdmin)
- Google Chrome / Firefox (do testów)
- XAMPP

---

## 📥 Jak uruchomić

1. Uruchom serwer XAMPP (Apache + MySQL)
2. Umieść pliki projektu w katalogu `htdocs` lub w osobnym folderze
3. Zaimportuj bazę danych wedkarstwo z pliku `baza.sql` (przez phpMyAdmin)
4. Wejdź na `http://localhost/zawody.html` w przeglądarce
5. Wypełnij formularz → dane zostaną zapisane do bazy

---

## 📌 Uwaga

Projekt wykonany zgodnie ze ścisłymi wytycznymi egzaminacyjnymi CKE.  
Nie jest przeznaczony do użytku produkcyjnego. Ma charakter edukacyjny i demonstracyjny.

---

## 🪪 Autor

Imię i nazwisko: Vadym Kozichev  
Rok: 2022  
Kwalifikacja: INF.03  
Zadanie nr: 03 (Wersja arkusza SG)
