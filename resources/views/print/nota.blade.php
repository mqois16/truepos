<html moznomarginboxes mozdisallowselectionprint>

<head>
    <title>
        Nota Pembelian
    </title>
    <style type="text/css">
        html {
            font-family: "Verdana";
        }

        .content {
            width: 51mm;
            font-size: 10px;
            padding: 20px;
        }

        .content .title {
            text-align: center;
        }

        .content .head-desc {
            margin-top: 10px;
            display: table;
            width: 100%;
        }

        .content .head-desc>div {
            display: table-cell;
        }

        .content .head-desc .user {
            text-align: right;
        }

        .content .nota {
            text-align: center;
            margin-top: 5px;
            margin-bottom: 5px;
        }

        .content .separate {
            margin-top: 10px;
            margin-bottom: 15px;
            border-top: 1px dashed #000;
        }

        .content .transaction-table {
            width: 100%;
            font-size: 10px;
        }

        .content .transaction-table .name {
            /*//width: 185px;*/
        }

        .content .transaction-table .qty {
            /*//text-align: center;*/
            /*width: 65px;*/
        }

        .content .transaction-table .sell-price {
            /*//text-align: right;*/
            width: 65px;
            text-align: right;
        }

        .content .transaction-table .final-price {
            text-align: right;
        }

        .content .transaction-table tr td {
            vertical-align: top;
        }

        .content .transaction-table .price-tr td {
            padding-top: 7px;
            padding-bottom: 7px;
        }

        .content .transaction-table .discount-tr td {
            padding-top: 7px;
            padding-bottom: 7px;
        }

        .content .transaction-table .separate-line {
            height: 1px;
            border-top: 1px dashed #000;
        }

        .content .thanks {
            margin-top: 25px;
            text-align: center;
        }

        .content .azost {
            margin-top: 5px;
            text-align: center;
            font-size: 10px;
        }

        @media print {
            @page {
                width: 51mm;
                margin: 0mm;
            }
        }
    </style>
    <script>
        window.print();
        window.onafterprint = function() {
            setTimeout(function() {
                window.close();
            }, 1000);
        }
    </script>
</head>

<body>
    <div class="content">
        <div class="title" style="padding-bottom: 13px">
            <div style="text-align: center;text-transform: uppercase;font-size: 15px">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
 width="57pt" height="36pt" viewBox="0 0 1921.000000 1210.000000"
 preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,1210.000000) scale(0.100000,-0.100000)"
fill="#000000" stroke="none">
<path d="M9065 11824 c-2132 -85 -4117 -630 -5670 -1555 -374 -223 -708 -460
-1045 -743 -187 -156 -597 -564 -740 -736 -634 -762 -981 -1552 -1061 -2412
-15 -169 -6 -643 15 -798 115 -819 451 -1544 1046 -2261 145 -174 564 -590
755 -749 1018 -846 2296 -1471 3825 -1869 1381 -360 2934 -494 4460 -386 2550
182 4877 1059 6370 2401 159 142 436 425 564 574 624 729 992 1541 1081 2387
21 196 21 555 0 755 -89 846 -454 1653 -1081 2388 -132 155 -519 541 -678 676
-845 718 -1849 1265 -3076 1675 -1054 352 -2111 553 -3330 635 -222 15 -1205
27 -1435 18z m1290 -344 c676 -41 1220 -107 1795 -216 1065 -203 2018 -516
2893 -951 391 -194 588 -308 937 -538 434 -287 701 -504 1055 -859 413 -414
693 -791 916 -1236 199 -397 317 -776 375 -1205 25 -182 25 -657 1 -835 -54
-387 -145 -709 -294 -1040 -223 -493 -519 -918 -943 -1353 -447 -459 -974
-859 -1595 -1212 -66 -37 -138 -78 -160 -90 -86 -49 -510 -257 -640 -315
-1207 -534 -2528 -858 -3965 -974 -411 -33 -618 -41 -1125 -40 -481 0 -695 7
-1050 34 -1497 117 -2858 451 -4085 1005 -111 50 -487 236 -580 287 -725 399
-1269 802 -1755 1299 -609 624 -991 1280 -1170 2009 -110 449 -124 961 -39
1430 81 450 272 926 545 1357 218 344 443 617 773 940 1030 1007 2570 1780
4366 2192 776 177 1559 280 2460 321 229 10 1055 4 1285 -10z"/>
<path d="M12542 10862 c-161 -508 -488 -648 -1137 -486 -55 14 -152 40 -215
59 -123 37 -425 92 -685 125 -1015 128 -2037 74 -3055 -162 -1667 -385 -3151
-1240 -4004 -2308 -456 -569 -716 -1186 -787 -1862 -15 -143 -15 -490 0 -628
73 -678 334 -1299 794 -1894 117 -152 307 -365 429 -482 505 -482 1312 -935
2263 -1271 853 -301 1759 -491 2709 -569 260 -21 1080 -30 1387 -15 2097 104
3570 715 4398 1825 54 72 101 137 105 143 6 10 -24 13 -136 13 l-143 0 -60
-77 c-33 -42 -112 -129 -175 -192 -568 -572 -1454 -973 -2550 -1156 -1167
-195 -2512 -96 -3485 256 -1462 528 -2408 1631 -2659 3099 -92 539 -94 1152
-6 1756 36 248 159 619 312 944 546 1157 1617 2005 2843 2249 292 59 370 66
730 65 364 0 469 -10 755 -76 797 -181 1479 -652 1953 -1349 161 -236 308
-514 412 -779 l57 -146 142 1 141 0 3 1496 2 1496 -97 7 c-54 4 -123 9 -154
12 l-56 6 -31 -100z"/>
<path d="M8001 7865 c-481 -177 -783 -509 -887 -975 -26 -117 -24 -359 4 -473
56 -226 166 -407 325 -537 80 -66 238 -144 347 -171 109 -27 326 -36 453 -20
165 22 405 92 544 159 l57 27 43 106 c50 122 62 201 43 279 -33 139 -212 213
-467 195 -59 -5 -166 -9 -238 -9 -120 -1 -134 1 -186 25 -63 30 -101 65 -131
123 -16 32 -19 53 -16 115 4 106 39 174 137 271 146 145 333 215 608 227 203
9 300 -25 382 -134 69 -92 82 -154 95 -443 16 -371 13 -746 -8 -905 -107 -809
-481 -1210 -1221 -1311 -102 -14 -192 -17 -420 -16 -333 1 -354 -2 -433 -73
-116 -104 -133 -285 -45 -460 34 -67 143 -173 219 -213 61 -32 63 -32 275 -42
658 -32 1189 82 1569 336 499 334 783 910 895 1817 l6 47 470 0 469 0 0 -541
0 -542 -73 -76 c-86 -91 -134 -162 -173 -256 -24 -59 -28 -84 -29 -165 0 -76
4 -104 21 -141 86 -186 306 -223 516 -87 36 24 196 160 355 303 159 143 362
325 451 405 181 162 214 208 214 298 0 143 -159 257 -388 278 l-74 7 2 969 3
969 95 38 c339 136 501 365 377 533 -11 14 -42 39 -71 55 l-51 28 -668 3 -668
3 -70 -37 c-266 -140 -192 -367 189 -584 l92 -52 0 -384 0 -384 -490 0 -490 0
0 203 c0 111 -3 279 -6 372 l-6 170 104 50 c87 41 116 62 185 130 164 162 199
335 89 441 -79 75 -29 72 -1196 78 l-1035 6 -94 -35z"/>
<path d="M13340 7890 c-197 -6 -206 -8 -331 -70 -371 -187 -635 -527 -725
-935 -22 -101 -29 -305 -14 -406 72 -494 444 -789 997 -789 201 0 505 56 628
116 73 36 152 114 188 187 103 211 31 475 -158 575 -43 23 -62 27 -135 27 -79
-1 -93 -4 -190 -46 -152 -66 -219 -83 -330 -83 -115 -1 -181 24 -236 87 -121
142 -64 422 115 563 136 107 307 122 498 43 65 -27 76 -37 124 -102 75 -101
400 -539 599 -807 92 -124 211 -283 264 -355 l96 -129 0 -531 0 -531 -66 -64
c-102 -99 -183 -206 -227 -298 -72 -150 -60 -293 31 -374 56 -48 131 -78 231
-90 l90 -11 108 52 c257 125 471 296 904 722 157 155 195 211 206 299 18 154
-120 257 -410 305 -37 6 -39 8 -33 38 3 18 6 183 7 367 1 184 5 345 10 358 7
19 432 631 758 1094 72 101 82 111 186 179 129 85 252 203 291 280 53 105 35
204 -55 297 l-41 42 -680 0 -680 0 -59 -59 c-182 -182 -147 -371 103 -553 39
-28 75 -55 80 -59 5 -5 -64 -135 -154 -294 l-162 -285 -39 0 c-21 0 -48 4 -61
9 -16 6 -71 89 -173 256 -82 136 -152 252 -154 257 -1 5 24 34 57 64 124 111
219 271 229 382 10 114 -49 213 -157 261 -44 20 -61 21 -695 19 -357 -1 -733
-5 -835 -8z"/>
</g>
</svg>
            </div>
            
            <div style="text-align: center">
                Margobawero - Kota Madiun
            </div>
            {{-- <div style="text-align: center">
                Telp: 0857-9087-9087
            </div> --}}
        </div>

        <div class="separate-line" style="border-top: 1px dashed #000;height: 1px;margin-bottom: 5px"></div>
        <table class="transaction-table" cellspacing="0" cellpadding="0">
            <tr>
                <td>TANGGAL</td>
                <td>:</td>
                <td>{{ $transaction->created_at }}</td>
            </tr>
            <tr>
                <td>FAKTUR</td>
                <td>:</td>
                <td>{{ $transaction->invoice }}</td>
            </tr>
            <tr>
                <td>KASIR</td>
                <td>:</td>
                <td>{{ $transaction->cashier->name ?? '' }}</td>
            </tr>
            <tr>
                <td>PEMBELI</td>
                <td>:</td>
                <td>{{ $transaction->customer->name ?? 'Umum' }}</td>
            </tr>
        </table>

        <div class="transaction">
            <table class="transaction-table" cellspacing="0" cellpadding="0">
                <tr class="price-tr">
                    <td colspan="3">
                        <div class="separate-line" style="border-top: 1px dashed #000;"></div>
                    </td>
                    <td colspan="3">
                        <div class="separate-line" style="border-top: 1px dashed #000;"></div>
                    </td>
                    <td colspan="3">
                        <div class="separate-line" style="border-top: 1px dashed #000;"></div>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left">PRODUK</td>
                    <td style="text-align: center">QTY</td>
                    <td style="text-align: right" colspan="5">HARGA</td>
                </tr>
                <tr class="price-tr">
                    <td colspan="3">
                        <div class="separate-line" style="border-top: 1px dashed #000;"></div>
                    </td>
                    <td colspan="3">
                        <div class="separate-line" style="border-top: 1px dashed #000;"></div>
                    </td>
                    <td colspan="3">
                        <div class="separate-line" style="border-top: 1px dashed #000;"></div>
                    </td>
                </tr>
                @foreach ($transaction->details()->get() as $item)
                <tr>
                    <td class='name'>{{ $item->product->title }}</td>
                    <td class='qty' style='text-align: center'>{{ $item->qty }}</td>
                    <td class='final-price' style='text-align: right' colspan="5">{{ formatPrice($item->price) }}</td>
                </tr>
                @endforeach
                <tr class="price-tr">
                    <td colspan="3">
                        <div class="separate-line"></div>
                    </td>
                    <td colspan="3">
                        <div class="separate-line"></div>
                    </td>
                    <td colspan="3">
                        <div class="separate-line"></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="final-price">
                        SUB TOTAL
                    </td>
                    <td colspan="3" class="final-price">
                        :
                    </td>
                    <td class="final-price">
                        {{ formatPrice($transaction->grand_total) }}
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="final-price">
                        DISKON
                    </td>
                    <td colspan="3" class="final-price">
                        :
                    </td>
                    <td class="final-price">
                        {{ formatPrice($transaction->discount) }}
                    </td>
                </tr>

                <tr class="discount-tr">
                    <td colspan="3">
                        <div class="separate-line"></div>
                    </td>
                    <td colspan="3">
                        <div class="separate-line"></div>
                    </td>
                    <td colspan="3">
                        <div class="separate-line"></div>
                    </td>
                </tr>

                <tr>
                    <td colspan="3" class="final-price">
                        TUNAI
                    </td>
                    <td colspan="3" class="final-price">
                        :
                    </td>
                    <td class="final-price">
                        {{ formatPrice($transaction->cash) }}
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="final-price">
                        KEMBALI
                    </td>
                    <td colspan="3" class="final-price">
                        :
                    </td>
                    <td class="final-price">
                        {{ formatPrice($transaction->change) }}
                    </td>
                </tr>
            </table>
        </div>
        <div class="thanks">
            ===========================
        </div>
        <div class="azost" style="margin-top: 5px">
            TERIMA KASIH<br>
            ATAS KUNJUNGAN ANDA
        </div>
    </div>
</body>

</html>