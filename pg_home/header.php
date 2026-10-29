<nav class="navbar navbar-dark navbar-dashboard">
    <div class="container-fluid p-0">

        <!-- flex-nowrap impede que os itens fiquem um embaixo do outro -->
        <div class="d-flex align-items-center gap-2 gap-sm-3 flex-nowrap w-100">

            <!-- LOGO -->
            <div class="navbar-box logo-box">
                <img src="img/logo.png" alt="Logo">
            </div>

            <div class="navbar-box saldo-box">
                <span>Saldo disponível</span>
                <strong>R$ 10.000,00</strong>
            </div>

        </div>

    </div>
</nav>

<style>
    .navbar-dashboard {
        width: 100%;
        height: 160px;
        background: #a90000;
        padding: 27px 20px;
    }

    .navbar-box {
        height: 60px;
        background: white;
        border-radius: 10px;
        display: flex;
        align-items: center;
    }

    /* LOGO */
    .logo-box {
        width: 180px;
        min-width: 110px; /* Impede que esmague demais */
        justify-content: center;
        padding: 8px;
        flex-shrink: 0;   /* Mantém a proporção da logo */
    }

    .logo-box img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }

    /* SALDO */
    .saldo-box {
        width: 230px;
        min-width: 130px; /* Garante visibilidade no mobile */
        padding: 0 15px;
        flex-direction: column;
        align-items: flex-start;
        justify-content: left;
    }

    .saldo-box span {
        font-size: 20px;
        color: #777;
    }

    .saldo-box strong {
        font-size: 20px;
        color: #222;
        white-space: nowrap;
    }

    /* Ajuste para telas pequenas/mobile (F12) */
    @media (max-width: 576px) {
        .navbar-dashboard {
            height: 90px;
            padding: 10px 12px;
        }

        .navbar-box {
            height: 10px;
        }

        .logo-box {
            width: 120px;
        }

        .saldo-box {
            width: auto;
            padding: 0 10px;
        }

        .saldo-box span {
            font-size: 10px;
        }

        .saldo-box strong {
            font-size: 14px;
        }
    }
</style>