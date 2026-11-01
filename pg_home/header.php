<section class="navbar-dashboard">
    <div class="navbar-content">

        <!-- LOGO -->
        <div class="navbar-box logo-box">
            <img src="img/logo.jpg" alt="Logo">
        </div>

        <!-- SALDO -->
        <div class="navbar-box saldo-box">
            <span class="saldo-label">Saldo disponível</span>
            <strong class="saldo-valor">R$ 10.000,00</strong>
        </div>

    </div>
</section>

<style>
    /* ==============================
       NAVBAR
    ============================== */

    .navbar-dashboard {
        width: 100%;
        padding: 12px 20px;
        background: linear-gradient(135deg, #d90000, #ff2b2b);
        box-sizing: border-box;
    }

    .navbar-content {
        width: 100%;
        max-width: 1400px;
        margin: 0 auto;

        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
    }

    /* ==============================
       CAIXAS
    ============================== */

    .navbar-box {
        height: 64px;
        background: #fff9f9;
        border-radius: 14px;

        display: flex;
        align-items: center;

        box-sizing: border-box;

        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.12);
    }

    /* ==========
       LOGO
    ============= */

    .logo-box {
        width: 190px
        min-width: 150px;
        background-color: #060606;
        justify-content: center;
        padding: 10px 20px;

        flex-shrink: 0;
    }

    .logo-box img {
        display: block;

        max-width: 100%;
        max-height: 48px;

        width: auto;
        height: auto;

        object-fit: contain;
    }

    /* ==============================
       SALDO
    ============================== */

    .saldo-box {
        width: 240px;
        min-width: 200px;

        padding: 8px 20px;

        flex-direction: column;
        align-items: flex-start;
        justify-content: center;

        margin-left: auto;
    }

    .saldo-label {
        font-size: 13px;
        font-weight: 500;
        color: #777;

        margin-bottom: 3px;
    }

    .saldo-valor {
        font-size: 20px;
        font-weight: 700;
        color: #222;

        line-height: 1.2;
        white-space: nowrap;
    }

    /* ==============================
       TABLET
    ============================== */

    @media (max-width: 768px) {

        .navbar-dashboard {
            padding: 10px 14px;
        }

        .navbar-box {
            height: 58px;
            border-radius: 12px;
        }

        .logo-box {
            width: 160px;
            min-width: 130px;
            padding: 8px 15px;
        }

        .logo-box img {
            max-height: 42px;
        }

        .saldo-box {
            width: 210px;
            min-width: 170px;
            padding: 7px 15px;
        }

        .saldo-label {
            font-size: 12px;
        }

        .saldo-valor {
            font-size: 17px;
        }
    }

    /* ==============================
       MOBILE
    ============================== */

    @media (max-width: 480px) {

        .navbar-dashboard {
            padding: 8px 10px;
        }

        .navbar-content {
            gap: 8px;
        }

        .navbar-box {
            height: 54px;
            border-radius: 10px;
        }

        .logo-box {
            width: 45%;
            min-width: 0;
            padding: 7px 10px;
        }

        .logo-box img {
            max-width: 100%;
            max-height: 38px;
        }

        .saldo-box {
            width: 55%;
            min-width: 0;

            padding: 6px 10px;
        }

        .saldo-label {
            font-size: 10px;
            margin-bottom: 2px;
        }

        .saldo-valor {
            font-size: 14px;
        }
    }
</style>