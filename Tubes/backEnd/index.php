<?php

// Ginanjar Ade Mulyana
// 153040116
// https://github.com/ginanjarademulyana/pw2021_153040116
// Praktikum Jum'at 10:00 - 11:00 WIB


session_start();


if (!isset($_SESSION["username"])) {
    header("Location: ../../account/login.php");
    exit;
}

require 'layout/sidebar.php';

?>



<div class="main-content">
    <div class="row">
        <div class="col-3 col-md-6 col-sm-12">
            <div class="box box-hover">
                <!-- AWAL COUNTER -->
                <div class="counter">
                    <div class="counter-title">
                        total order
                    </div>
                    <div class="counter-info">
                        <div class="counter-count">
                            78
                        </div>
                        <i class='bx bx-shopping-bag'></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-3 col-md-6 col-sm-12">
            <div class="box box-hover">
                <div class="counter">
                    <div class="counter-title">
                        conversion rate
                    </div>
                    <div class="counter-info">
                        <div class="counter-count">
                            30.5%
                        </div>
                        <i class='bx bx-chat'></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-3 col-md-6 col-sm-12">
            <div class="box box-hover">
                <div class="counter">
                    <div class="counter-title">
                        total profit
                    </div>
                    <div class="counter-info">
                        <div class="counter-count">
                            Rp. 9.800.000
                        </div>
                        <i class='bx bx-line-chart'></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-3 col-md-6 col-sm-12">
            <div class="box box-hover">
                <div class="counter">
                    <div class="counter-title">
                        daily visitors
                    </div>
                    <div class="counter-info">
                        <div class="counter-count">
                            690
                        </div>
                        <i class='bx bx-user'></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- END COUNTER -->
    </div>


    <div class="col-12">
        <div class="box">
            <div class="box-header">
                Recent orders
            </div>
            <div class="box-body overflow-scroll">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer</th>
                            <th>Date</th>
                            <th>Order status</th>
                            <th>Payment status</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#1125</td>
                            <td>
                                <div class="order-owner">
                                    <span>ginanjar ade mulyana</span>
                                </div>
                            </td>
                            <td>2021-05-20</td>
                            <td>
                                <span class="order-status order-ready">
                                    Ready
                                </span>
                            </td>
                            <td>
                                <div class="payment-status payment-pending">
                                    <div class="dot"></div>
                                    <span>Pending</span>
                                </div>
                            </td>
                            <td>Rp. 1.250.000</td>
                        </tr>

                        <tr>
                            <td>#1124</td>
                            <td>
                                <div class="order-owner">
                                    <span>dewi wisuda wardani</span>
                                </div>
                            </td>
                            <td>2021-05-19</td>
                            <td>
                                <span class="order-status order-shipped">
                                    Shipped
                                </span>
                            </td>
                            <td>
                                <div class="payment-status payment-paid">
                                    <div class="dot"></div>
                                    <span>Paid</span>
                                </div>
                            </td>
                            <td>Rp. 1.200.000</td>
                        </tr>

                        <tr>
                            <td>#1123</td>
                            <td>
                                <div class="order-owner">
                                    <span>leni tresna mulia</span>
                                </div>
                            </td>
                            <td>2021-05-19</td>
                            <td>
                                <span class="order-status order-shipped">
                                    Shipped
                                </span>
                            </td>
                            <td>
                                <div class="payment-status payment-paid">
                                    <div class="dot"></div>
                                    <span>Paid</span>
                                </div>
                            </td>
                            <td>Rp. 1.100.000</td>
                        </tr>

                        <tr>
                            <td>#1122</td>
                            <td>
                                <div class="order-owner">
                                    <span>luthfiana habiburahman</span>
                                </div>
                            </td>
                            <td>2021-05-18</td>
                            <td>
                                <span class="order-status order-shipped">
                                    Shipped
                                </span>
                            </td>
                            <td>
                                <div class="payment-status payment-paid">
                                    <div class="dot"></div>
                                    <span>Paid</span>
                                </div>
                            </td>
                            <td>Rp. 1.750.000</td>
                        </tr>

                        <tr>
                            <td>#1121</td>
                            <td>
                                <div class="order-owner">
                                    <span>asep rahmat mulyana</span>
                                </div>
                            </td>
                            <td>2021-05-18</td>
                            <td>
                                <span class="order-status order-shipped">
                                    Shipped
                                </span>
                            </td>
                            <td>
                                <div class="payment-status payment-paid">
                                    <div class="dot"></div>
                                    <span>Paid</span>
                                </div>
                            </td>
                            <td>Rp. 2.400.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- APP JS -->
<script src="assets/js/app.js"></script>

</body>

</html>