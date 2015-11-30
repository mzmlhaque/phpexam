<?php
/**
 * Created by PhpStorm.
 * User: Mozammel
 * Date: 11/23/2015
 * Time: 2:00 AM
 */

?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3623.4939807360447!2d90.41378974914554!3d24.744246790231337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37564fa6c1272573%3A0x59a7dc6f297a29ad!2sMozammel+Haque!5e0!3m2!1sen!2sbd!4v1448224066891" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    <div class="row">
        <h3 class="text-center">Please left your message:</h3>
        <div class="col-sm-4"></div>
        <div class="col-sm-8">
            <form class="form-group" action="mail.php" method="post">
                <label for="name">Name: </label><sup class="text-danger">*</sup><br>
                <input type="text" id="name" name="name" required class="form-control"><br>
                <label for="email">E-mail</label><sup class="text-danger">*</sup><br>
                <input class="form-control" type="email" id="email" name="email" required><br>
                <label for="message">Message</label><sup class="text-danger">*</sup><br>
                <textarea class="form-control" required name="message" id="message"></textarea><br>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>
    <!-- End row -->
    <div class="row" style="margin-top: 30px">
        <div class="col-sm-4">
            <h3>Mailing Address:</h3>
            33/5, Alia Madrasha Road</br>
            Vatikashor <br>
            Mymensingh-2200 <br>
            phone: +88 091 63846
        </div>
        <div class="col-sm-4">
            <h3>Mailing Address:</h3>
            33/5, Alia Madrasha Road</br>
            Vatikashor <br>
            Mymensingh-2200 <br>
            phone: +88 091 63846
        </div>
        <div class="col-sm-4">
            <h3>Mailing Address:</h3>
            33/5, Alia Madrasha Road</br>
            Vatikashor <br>
            Mymensingh-2200 <br>
            phone: +88 091 63846
        </div>
    </div>
    <!-- End row -->
</div>
