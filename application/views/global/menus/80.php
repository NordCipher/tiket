<li><a href="<?= BASE_URL ?>user/dashboard"> <i class="fa fa-home"></i>Панел</a></li>

<li><a href="#ticketsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-list"></i>Тикети</a>
    <ul id="ticketsDropdown" class="collapse list-unstyled ">
        <li><a href="<?= BASE_URL ?>tickets/create_new">Нов Тикет</a></li>
        <li><a href="<?= BASE_URL ?>tickets/list_all">Сите Тикети</a></li>
        <li><a href="<?= BASE_URL ?>tickets/unassigned_tickets">Недоделени Тикети</a></li>
        <li><a href="<?= BASE_URL ?>tickets/assigned_tickets">Доделени Тикети</a></li>
        <li><a href="<?= BASE_URL ?>tickets/closed_tickets" >Затворени Тикети</a></li>
        <li><a href="<?= BASE_URL ?>tickets/my_tickets" title="Created by me">Мои Тикети</a></li>
        <li><a href="<?= BASE_URL ?>tickets/cc_to_me">Следени</a></li>
    </ul>
</li>

<li><a href="#usersDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-users"></i>Корисници</a>
    <ul id="usersDropdown" class="collapse list-unstyled ">
        <li><a href="<?= BASE_URL ?>user/list">Сите Корисници</a></li>
        <li><a href="<?= BASE_URL ?>user/add_user">Додади Корисник</a></li>
    </ul>
</li>
<li><a href="<?= BASE_URL ?>user/profile"> <i class="fa fa-user"></i>Мој Профил</a></li>