<?php
$naslov = "PHP dokument — vježba 2_3";
$autor = "Leon Rus";
$opis = "PHP omogućuje izradu dinamičkih web stranica pomoću podataka koje korisnik odabere.";


$tema = $_GET["tema"] ?? "dark";
$slika = $_GET["slika"] ?? "php";
$prikaziOpis = isset($_GET["opis"]);


if ($tema != "dark" && $tema != "light") {
    $tema = "dark";
}


if ($slika != "php" && $slika != "server" && $slika != "code") {
    $slika = "php";
}


if ($slika == "php") {
    $putanja = "img/php.jpg";
} elseif ($slika == "server") {
    $putanja = "img/server.jpg";
} else {
    $putanja = "img/code.jpg";
}
?>

<html lang="hr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Vježba 1d — forma, izbor teme i slike.">
  <title><?php echo $naslov; ?></title>

  <style>
    :root {
      --bg: #0f172a;
      --card: #ffffff;
      --text: #111827;
      --muted: #6b7280;
      --accent: #2563eb;
    }

    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      background: var(--bg);
      color: var(--text);
      font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
    }

    body.light {
      background: #e5e7eb;
    }

    .wrap {
      max-width: 720px;
      margin: 48px auto;
      background: var(--card);
      padding: 32px;
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0,0,0,.08);
    }

    h1 {
      margin: 0 0 12px;
      font-size: 2rem;
    }

    p {
      margin: 0 0 14px;
      line-height: 1.6;
    }

    .muted {
      color: var(--muted);
      font-size: .95rem;
    }

    .btn {
      display: inline-block;
      padding: 10px 16px;
      font: inherit;
      color: var(--accent);
      background: transparent;
      border: 1px solid var(--accent);
      border-radius: 10px;
      text-decoration: none;
      cursor: pointer;
    }

    .btn:hover {
      background: var(--accent);
      color: #fff;
    }

    .row {
      display: flex;
      gap: 12px;
      flex-wrap: wrap;
      margin-top: 10px;
    }

    .figure {
      margin: 20px 0;
    }

    .figure img {
      max-width: 100%;
      width: 300px;
      height: auto;
      display: block;
      border-radius: 10px;
    }

    form {
      margin-top: 8px;
    }

    label {
      display: block;
      margin: 8px 0;
    }

    select {
      padding: 8px;
      border: 1px solid #d1d5db;
      border-radius: 8px;
    }

    fieldset {
      border: 1px solid #e5e7eb;
      border-radius: 10px;
      padding: 10px 12px;
      margin: 10px 0;
    }

    legend {
      padding: 0 6px;
      color: var(--muted);
    }

    .opis {
      background: #eff6ff;
      border-left: 4px solid var(--accent);
      border-radius: 8px;
      padding: 14px;
      margin: 16px 0;
    }
  </style>
</head>

<body class="<?php echo $tema; ?>">
  <main class="wrap">

    <?php
    echo "<h1>" . htmlspecialchars($naslov) . "</h1>";
    echo "<p>Ovu stranicu izradio/la je <strong>"
        . htmlspecialchars($autor) . "</strong>.</p>";
    ?>

    <div class="figure">
      <img src="<?php echo $putanja; ?>"
           alt="<?php echo htmlspecialchars($slika); ?>">
    </div>

    <?php
    if ($prikaziOpis) {
        echo "<div class='opis'>";
        echo "<p>" . htmlspecialchars($opis) . "</p>";
        echo "</div>";
    }
    ?>

    <form method="get" action="vjezba1d.php">

      <fieldset>
        <legend>Odaberi temu</legend>

        <label>
          <input type="radio" name="tema" value="dark"
            <?php if ($tema == "dark") echo "checked"; ?>>
          Dark
        </label>

        <label>
          <input type="radio" name="tema" value="light"
            <?php if ($tema == "light") echo "checked"; ?>>
          Light
        </label>
      </fieldset>

      <fieldset>
        <legend>Odaberi sliku</legend>

        <label for="slika">Slika:</label>

        <select id="slika" name="slika">
          <option value="php"
            <?php if ($slika == "php") echo "selected"; ?>>
            PHP
          </option>

          <option value="server"
            <?php if ($slika == "server") echo "selected"; ?>>
            Server
          </option>

          <option value="code"
            <?php if ($slika == "code") echo "selected"; ?>>
            Code
          </option>
        </select>
      </fieldset>

      <label>
        <input type="checkbox" name="opis" value="da"
          <?php if ($prikaziOpis) echo "checked"; ?>>
        Prikaži opis
      </label>

      <div class="row">
        <button class="btn" type="submit">Primijeni odabir</button>

        <a class="btn" href="vjezba1c.php">
         
        </a>
      </div>
    </form>

    <p class="muted" style="margin-top:20px">
      &copy; 2026 — Demo za PHP
    </p>

  </main>
</body>
</html>
<!-- Naziv datoteke: vjezba2_3.php -->
