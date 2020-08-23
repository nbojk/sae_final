<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #009688">
    <a class="navbar-brand" href="/reservations">Hotel Booking System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/rooms">Rooms</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/users">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/logout">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<div class="mt-3 ml-3">
    <?php if(isset($_SESSION['user'])) : ?>
        User: <?= $_SESSION['user']->name; ?>
    <?php else: ?>
        Guest
    <?php endif;?>
</div>
