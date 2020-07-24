<?php include_once("lib/includes.php");?>
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<style>
    /* defaults */

    html,
    body {
        height: 100%;
    }

    html {
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        font-size: 24px;
    }

    *,
    *:before,
    *:after {
        -moz-box-sizing: inherit;
        box-sizing: inherit;
    }

    body {
        margin: 0;
        line-height: 1.5;
        background-color: #e7e7e7;
        font-family: Roboto, Helvectica, Arial, sans-serif;
        color: #333;
    }

    /* headers */

    h1 {
        font-family: "Roboto Slab", Times, "Times New Roman", serif;
        font-size: 2em;
    }

    /* form elements */

    label {
        display: block;
    }

    select,
    textarea,
    input {
        max-width: 100%;
        padding: 0;
        margin: 0;
        font-family: inherit;
        font-weight: inherit;
        font-size: inherit;
        color: inherit;
    }

    input[type="submit"] {
        border: none;
        cursor: pointer;
    }

    /* vertical align snippet */

    .va-cont {
        display: table;
        table-layout: fixed;
        width: 100%;
        height: 100%;
    }

    .va-inn {
        display: table-cell;
        vertical-align: middle;
    }

    /* styles */

    .form-container {
        width: 80%;
        padding: 10px;
        margin: auto;
    }

    .form-heading {
        margin-top: 0;
        margin-bottom: 1.2em;
        text-align: center;

    }

    .form-heading-highlight {
        color: black;
        text-transform: uppercase;
    }

    .form-row {
        position: relative;
        margin-top: 30px;
    }

    .form-label {
        position: absolute;
        top: 17px;
        left: 20px;
        color: #999;
        cursor: text;
        transition: all 0.15s ease-in-out 0s;
    }

    .form-textbox,
    .form-submit {
        width: 100%;
        padding: 20px;
    }

    .form-textbox {
        box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-textbox:focus~.form-label,
    .form-textbox:valid~.form-label {
        top: -1.5em;
        left: 0;
        font-size: 0.8em;
        color: inherit;
        cursor: pointer;
    }

    .form-submit {
        background-color: #2194e0;
        font-weight: 700;
        color: #fff;
        transition: opacity 0.15s ease-in-out 0s;
    }

    .form-submit:hover {
        opacity: 0.75;
    }

    /* media queries */

    @media only screen and (max-width: 1366px) {
        .form-container {
            width: 70%;
        }
    }

    @media only screen and (max-width: 1024px) {
        body {
            font-size: 0.85em;
        }

        .form-container {
            width: 80%;
        }
    }

    @media only screen and (max-width: 768px) {
        body {
            font-size: 0.7em;
        }

        .form-container {
            width: 90%;
        }
    }

    @media only screen and (max-width: 480px) {
        .form-container {
            width: 100%;
        }
    }
</style>

<div class="va-cont">
    <div class="va-inn">
        <form method="POST" class="form-container" >
            <h1 class="form-heading">
                <span class="form-heading-highlight">Recuperar senha</span>
            </h1>
            <div class="form-row">
                <input type="text" id="form-email" name="email" class="form-textbox" required>
                <label for="form-email" class="form-label">Digite seu e-mail</label>
            </div>

            <div class="form-row">
                <input type="submit" value="Recuperar Senha" name="env" class="form-submit">
                <input type="hidden" name="env" value="form">
            </div>
        </form>
    </div>
</div>
<?php echo verifica_dados($con);?>

