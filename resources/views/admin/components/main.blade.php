<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('admin_assets/css/app.css') }}" />
    <script src="https://kit.fontawesome.com/9c17cacf2d.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="{{ asset('admin_assets/css/style.css') }}">
</head>
<body class="bg-gray-50">
    <nav class="fixed z-30 w-full bg-gray-50">
        <div class="py-3 px-3 lg:px-5 lg:pl-3">
            <div class="flex justify-between items-center">
                <div class="flex justify-start items-center">
                    <button id="toggleSidebar" aria-expanded="true" aria-controls="sidebar" class="hidden p-2 mr-4 text-gray-600 rounded cursor-pointer lg:inline hover:text-gray-900 hover:bg-gray-100">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <button
                        id="toggleSidebarMobile"
                        aria-expanded="true"
                        aria-controls="sidebar"
                        class="p-2 mr-2 text-gray-600 rounded cursor-pointer lg:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 focus:ring-2 focus:ring-gray-100"
                    >
                        <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                        <svg id="toggleSidebarMobileClose" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </button>
                    <a href="index.html" class="text-md font-semibold flex items-center lg:mr-1.5">
                        <span class="hidden md:inline-block self-center text-xl font-bold whitespace-nowrap">Restraunt</span>
                    </a>
                    <form action="#" method="GET" class="hidden lg:block lg:pl-8">
                        <label for="topbar-search" class="sr-only">Search</label>
                        <div class="relative mt-1 lg:w-80">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input
                                type="text"
                                name="email"
                                id="topbar-search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full pl-10 p-2.5"
                                placeholder="Search"
                            />
                        </div>
                    </form>
                </div>
                <div class="flex items-center">
                    <button id="toggleSidebarMobileSearch" type="button" class="p-2 text-gray-500 rounded-2xl lg:hidden hover:text-gray-900 hover:bg-gray-100">
                        <span class="sr-only">Search</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <button type="button" data-dropdown-toggle="notification-dropdown" class="p-2 text-gray-500 rounded-2xl hover:text-gray-900 hover:bg-gray-100">
                        <span class="sr-only">View notifications</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
                        </svg>
                    </button>
                    <div class="hidden overflow-hidden z-50 my-4 max-w-sm text-base list-none bg-white rounded divide-y divide-gray-100 shadow-lg shadow-gray-300" id="notification-dropdown">
                        <div class="block py-2 px-4 text-base font-medium text-center text-gray-700 bg-gray-50">
                            Notifications
                        </div>
                        <div>
                            <a href="#" class="flex py-3 px-4 border-b hover:bg-gray-100">
                                <div class="flex-shrink-0">
                                    <img class="w-11 h-11 rounded-full" src="images/users/bonnie-green.png" alt="Jese image" />
                                    <div class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-fuchsia-600 rounded-full border border-white">
                                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path>
                                            <path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="pl-3 w-full">
                                    <div class="text-gray-500 font-normal text-sm mb-1.5">New message from <span class="font-semibold text-gray-900">Bonnie Green</span>: "Hey, what's up? All set for the presentation?"</div>
                                    <div class="text-xs font-medium text-fuchsia-500">a few moments ago</div>
                                </div>
                            </a>
                            <a href="#" class="flex py-3 px-4 border-b hover:bg-gray-100">
                                <div class="flex-shrink-0">
                                    <img class="w-11 h-11 rounded-full" src="images/users/jese-leos.png" alt="Jese image" />
                                    <div class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-gray-900 rounded-full border border-white">
                                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="pl-3 w-full">
                                    <div class="text-gray-500 font-normal text-sm mb-1.5">
                                        <span class="font-semibold text-gray-900">Jese leos</span> and <span class="font-medium text-gray-900">5 others</span> started following you.
                                    </div>
                                    <div class="text-xs font-medium text-fuchsia-500">10 minutes ago</div>
                                </div>
                            </a>
                            <a href="#" class="flex py-3 px-4 border-b hover:bg-gray-100">
                                <div class="flex-shrink-0">
                                    <img class="w-11 h-11 rounded-full" src="images/users/joseph-mcfall.png" alt="Joseph image" />
                                    <div class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-red-600 rounded-full border border-white">
                                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="pl-3 w-full">
                                    <div class="text-gray-500 font-normal text-sm mb-1.5">
                                        <span class="font-semibold text-gray-900">Joseph Mcfall</span> and <span class="font-medium text-gray-900">141 others</span> love your story. See it and view more stories.
                                    </div>
                                    <div class="text-xs font-medium text-fuchsia-500">44 minutes ago</div>
                                </div>
                            </a>
                            <a href="#" class="flex py-3 px-4 border-b hover:bg-gray-100">
                                <div class="flex-shrink-0">
                                    <img class="w-11 h-11 rounded-full" src="images/users/leslie-livingston.png" alt="Leslie image" />
                                    <div class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-green-400 rounded-full border border-white">
                                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                fill-rule="evenodd"
                                                d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                                                clip-rule="evenodd"
                                            ></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="pl-3 w-full">
                                    <div class="text-gray-500 font-normal text-sm mb-1.5">
                                        <span class="font-semibold text-gray-900">Leslie Livingston</span> mentioned you in a comment: <span class="font-medium text-teal-500" href="#">@bonnie.green</span> what do you say?
                                    </div>
                                    <div class="text-xs font-medium text-fuchsia-500">1 hour ago</div>
                                </div>
                            </a>
                            <a href="#" class="flex py-3 px-4 hover:bg-gray-100">
                                <div class="flex-shrink-0">
                                    <img class="w-11 h-11 rounded-full" src="images/users/robert-brown.png" alt="Robert image" />
                                    <div class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-purple-500 rounded-full border border-white">
                                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="pl-3 w-full">
                                    <div class="text-gray-500 font-normal text-sm mb-1.5">
                                        <span class="font-semibold text-gray-900">Robert Brown</span> posted a new video: Glassmorphism - learn how to implement the new design trend.
                                    </div>
                                    <div class="text-xs font-medium text-fuchsia-500">3 hours ago</div>
                                </div>
                            </a>
                        </div>
                        <a href="#" class="block py-2 text-base font-normal text-center text-gray-900 bg-gray-50 hover:bg-gray-100">
                            <div class="inline-flex items-center">
                                <svg class="mr-2 w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                </svg>
                                View all
                            </div>
                        </a>
                    </div>
                    <button type="button" data-dropdown-toggle="apps-dropdown" class="p-2 text-gray-500 rounded-2xl hover:text-gray-900 hover:bg-gray-100">
                        <span class="sr-only">View notifications</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"
                            ></path>
                        </svg>
                    </button>
                    <div class="hidden overflow-hidden z-50 my-4 max-w-sm text-base list-none bg-white rounded divide-y divide-gray-100 shadow-lg shadow-gray-300" id="apps-dropdown">
                        <a href="{{ route('admin.logout') }}" class="block py-2 px-4 text-base font-medium text-center text-gray-700 bg-gray-50 flex gap-2 items-center">
                            <i class="material-icons">power_off</i> LOGOUT
                        </a>
                       
                    </div>
                    <div class="ml-3">
                        <div>
                            <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300" id="user-menu-button-2" aria-expanded="false" data-dropdown-toggle="dropdown-2">
                                <span class="sr-only">Open user menu</span>
                                
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="flex overflow-hidden bg-white pt-16">
        <aside id="sidebar" class=" flex hidden fixed top-0 left-0 z-20 flex-col flex-shrink-0 pt-16 w-64 h-full duration-200 lg:flex transition-width" aria-label="Sidebar">
            <div class="flex relative flex-col flex-1 pt-0 min-h-0 bg-gray-50">
                <div class="flex overflow-y-auto flex-col flex-1 pt-8 pb-4">
                    <div class="flex-1 px-3 bg-gray-50" id="sidebar-items">
                        <ul class="pb-2 pt-1">
                            <li>
                                <form action="#" method="GET" class="lg:hidden">
                                    <label for="mobile-search" class="sr-only">Search</label>
                                    <div class="relative">
                                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <input
                                            type="text"
                                            name="email"
                                            id="mobile-search"
                                            class="bg-gray-50 border border-gray-300 text-dark-500 text-sm font-light rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full pl-10 p-2.5 mb-2"
                                            placeholder="Search"
                                        />
                                    </div>
                                </form>
                            </li>
                            <li>
                                <a href="{{ route('admin.dashboard') }}" class="flex items-center py-2.5 px-4 text-base font-normal text-dark-500 rounded-lg hover:bg-gray-200 group transition-all duration-200" sidebar-toggle-collapse>
                                    <div class="bg-white shadow-lg shadow-gray-300 text-dark-700 w-8 h-8 rounded-lg text-center grid place-items-center border border-gray-100">
                                        <i class="fa-solid fa-home"></i>
                                    </div>
                                    <span class="ml-3 text-dark-500 text-sm font-light" sidebar-toggle-item>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.order_history.index') }}" class="flex items-center py-2.5 px-4 text-base font-normal text-dark-500 rounded-lg hover:bg-gray-200 group transition-all duration-200" sidebar-toggle-collapse>
                                    <div class="bg-white shadow-lg shadow-gray-300 text-dark-700 w-8 h-8 rounded-lg text-center grid place-items-center border border-gray-100">
                                        <i class="fa-solid fa-home"></i>
                                    </div>
                                    <span class="ml-3 text-dark-500 text-sm font-light" sidebar-toggle-item>Order History</span>
                                </a>
                            </li>

                            <li>
                                <a sidebar-toggle-collapse data-collapse-toggle="dropdown-setup" class="flex items-center py-2.5 px-4 text-base font-normal text-dark-500 rounded-lg hover:bg-gray-200 group transition-all duration-200" sidebar-toggle-collapse>
                                    <div class="bg-white shadow-lg shadow-gray-300 text-dark-700 w-8 h-8 rounded-lg text-center grid place-items-center border border-gray-100">
                                        <i class="fa-solid fa-screwdriver-wrench"></i>
                                    </div>
                                    <span class="ml-3 text-dark-500 text-sm font-light" sidebar-toggle-item>Setup</span>
                                    <svg sidebar-toggle-item class="w-4 h-4 ml-auto text-gray-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>

                                </a>
                                <ul id="dropdown-setup" sidebar-toggle-list class="pb-2 pt-1 hidden ">
                                    <li>
                                    <a href="{{ route('admin.categories.index') }}" class="text-sm text-dark-500 font-light rounded-lg flex items-center p-2 group  hover:bg-gray-200 transition duration-75 pl-11">Categories</a>
                                    </li>
                                    <li>
                                    <a href="{{ route('admin.items.index') }}" class="text-sm text-dark-500 font-light rounded-lg flex items-center p-2 group   hover:bg-gray-200 transition duration-75 pl-11">Items</a>
                                    </li>
                                    <li>
                                    <a href="{{ route('admin.tables.index') }}" class="text-sm text-dark-500 font-light rounded-lg flex items-center p-2 group   hover:bg-gray-200 transition duration-75 pl-11">Table</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        
                    </div>
                </div>
               
            </div>
        </aside>
        <div class="hidden fixed inset-0 z-10 bg-gray-900 opacity-50" id="sidebarBackdrop"></div>
        <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
            <main class="py-4 px-4" style="height: calc(100vh - 80px) ">
                @yield('content')
            </main>
        </div>
    </div>
</body>

<script data-cfasync="false" src="{{ asset('admin_assets/js/app.bundle.js') }}"></script>
<script src="{{ asset('admin_assets/js/index.js') }}"></script>

@yield('js')
</body>
</html>