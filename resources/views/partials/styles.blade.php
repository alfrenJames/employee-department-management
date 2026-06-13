<style>
nav {
    position: sticky;
    top: 0;
    z-index: 1020;
    background: #fff;
    box-shadow: 0 1px 12px rgba(15, 23, 42, 0.08);
}

/* Burger / navbar toggler styles */
.burger {
    display: inline-block;
    width: 28px;
    height: 20px;
    position: relative;
}

.burger span {
    position: absolute;
    left: 0;
    right: 0;
    height: 2px;
    background: currentColor;
    display: block;
    transition: transform .28s ease, opacity .2s ease;
}

.burger span:nth-child(1) {
    top: 0;
}

.burger span:nth-child(2) {
    top: 9px;
}

.burger span:nth-child(3) {
    bottom: 0;
}

.navbar-toggler.open .burger span:nth-child(1) {
    transform: translateY(9px) rotate(45deg);
}

.navbar-toggler.open .burger span:nth-child(2) {
    opacity: 0;
}

.navbar-toggler.open .burger span:nth-child(3) {
    transform: translateY(-9px) rotate(-45deg);
}

@media (max-width: 991.98px) {
    .navbar-toggler {
        width: 48px;
        height: 40px;
    }

    .burger {
        margin-left: 6px;
    }
}

/* Compact, modern pagination */
.pagination {
    gap: .35rem;
    align-items: center;
    display: flex;
    flex-wrap: wrap;
}

.pagination .page-item .page-link {
    padding: .35rem .6rem;
    min-width: 38px;
    height: 36px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: .375rem;
    border: 1px solid #e6e9ee;
    background: #ffffff;
    color: #374151;
    font-size: .9rem;
}

.pagination .page-item.active .page-link {
    background: #0d6efd;
    border-color: #0d6efd;
    color: #fff;
    box-shadow: none;
}

.pagination .page-link:hover {
    background: #f8fafc;
    color: #111827;
}

@media (max-width: 576px) {

    .pagination .page-item:first-child .page-link,
    .pagination .page-item:last-child .page-link {
        padding-left: .5rem;
        padding-right: .5rem;
        min-width: 34px;
    }

    .pagination .page-link {
        font-size: .85rem;
    }
}
</style>