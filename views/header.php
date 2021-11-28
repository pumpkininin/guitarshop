<div class="menu" style="list-style-type: none">
    <?php if (isset($_SESSION['user'])) : ?>
        <li><a href="index.php?controller=orderController&action=myOrder"><span class="glyphicon glyphicon-log-out"></span> My Orders &emsp;|</a></li>
        <li><a href="index.php?controller=cartController&action=list"><span class="glyphicon glyphicon-shopping-cart"></span>&emsp; Cart &emsp;|</a></li>
        <li><a href="index.php?controller=updateProfileController&action=index"><span class="glyphicon glyphicon-cog"></span>&emsp; Update Profile &emsp;|</a></li>
        <li><a href="index.php?controller=loginController&action=logout"><span class="glyphicon glyphicon-log-out"></span>&emsp; Logout</a></li>
    <?php elseif (isset($_SESSION['admin'])) : ?>
        <li>
        <li><a href="index.php?controller=registerController&action=index"><span class=" glyphicon  glyphicon-user">Add User &emsp;|</a></li>
        <li><a href="index.php?controller=userController&action=list"><span class=" glyphicon  glyphicon-user">&emsp; Manage Users &emsp;|</a></li>
        </li>

        <li>
        <li><a href="index.php?controller=productController&action=add"><span class=" glyphicon  glyphicon-import">&emsp; Add New Product &emsp;|</a></li>
        <li><a href="index.php?controller=productController&action=list"><span class=" glyphicon  glyphicon-import">&emsp; Manage Products &emsp;|</a></li>
        </li>
        <li>
            <a href="index.php?controller=orderController&action=list"><span class="glyphicon glyphicon-log-out"></span>&emsp; Orders &emsp;|</a>
        </li>
        <li>
            <a href="index.php?controller=loginController&action=logout"><span class="glyphicon glyphicon-log-out"></span>&emsp; Logout</a>
        </li>
    <?php else : ?>
        <li><a href="index.php?controller=registerController&action=index"><span class="glyphicon glyphicon-register"></span> Register &emsp;|</a></li>
        <li><a href="index.php?controller=loginController&action=index"><span class="glyphicon glyphicon-log-in"></span>&emsp; Login</a></li>
    <?php endif ?>
</div>