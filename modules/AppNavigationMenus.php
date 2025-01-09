<?php

//main header navigation menus
DEFINE("NAVIGATION_MENUS",  [
    "Home" => [
        "url" => DOMAIN . "/app",
        "icon" => "home",
        "title" => "Dashboard",
        "counts" => "0"
    ],
    "EnqNavLinks" => [
        "url" => DOMAIN . "/app/vendorsleads",
        "icon" => "briefcase",
        "title" => "All Enquiries",
        "counts" => "0"
    ],
    "leadsnav" => [
        "url" => DOMAIN . "/app/leads",
        "icon" => "star",
        "title" => "All Leads",
        "counts" => "0"
    ],
    "vendors" => [
        "url" => DOMAIN . "/app/vendors",
        "icon" => "truck",
        "title" => "All Vendors",
        "counts" => "0"
    ],
    "subscriptions" => [
        "url" => DOMAIN . "/app/subscriptions",
        "icon" => "refresh",
        "title" => "All Subscriptions",
        "counts" => "0"
    ],
    "products" => [
        "url" => DOMAIN . "/app/products",
        "icon" => "table",
        "title" => "All Products",
        "counts" => "0"
    ],
    "users" => [
        "url" => DOMAIN . "/app/users",
        "icon" => "briefcase",
        "title" => "All Users",
        "counts" => "0"
    ],
    "Profile" => [
        "url" => DOMAIN . "/app/profile",
        "icon" => "user",
        "title" => "Profile",
        "counts" => "0"
    ],
    "tools" => [
        "url" => DOMAIN . "/app/tools",
        "icon" => "calculator",
        "title" => "All Tools",
        "counts" => "0"
    ],
    "settings" => [
        "url" => DOMAIN . "/app/settings",
        "icon" => "gears",
        "title" => "Settings",
        "counts" => "0"
    ],
    "Logout" => [
        "url" => DOMAIN . "/auth/logout",
        "icon" => "sign-out",
        "title" => "Logout",
        "counts" => "0"
    ]
]);

//Login Menus and login forms
define("LOGIN_FORMS", [
    "LoginForm" => "LoginForm.php",
    "ForgetForm" => "ForgetForm.php",
    "ResetPassword" => "ResetPasswordForm.php",
    "VerifyAccount" => "VerifyAccount.php"
]);

//tools menus
define(
    "TOOLS_MENU",
    $calculators = [
        "all_available_tools" => [
            "name" => "All Available Tools",
            "url" => "/tools",
            "desc" => "",
            "icon" => "all_available_tools.png"
        ],
        "area_and_volume_calculator" => [
            "name" => "Area and Volume Calculator",
            "url" => "/tools/area-and-volume-calculator",
            "desc" => "Calculate the area and volume of a space for construction or renovation planning.",
            "icon" => "area_and_volume_calculator.png",
        ],
        "brick_calculator" => [
            "name" => "Brick and Material Calculator",
            "url" => "/tools/brick-calculator",
            "desc" => "Estimate the number of bricks needed for a construction project based on dimensions.",
            "icon" => "brick_calculator.png",
        ],
        "carpet_calculator" => [
            "name" => "Carpet Calculator",
            "url" => "/tools/carpet-calculator",
            "desc" => "Determine the amount of carpet required for a room or area.",
            "icon" => "carpet_calculator.png",
        ],
        "construction_loan_calculator" => [
            "name" => "Construction Loan Calculator",
            "url" => "/tools/construction-loan-calculator",
            "desc" => "Estimate loan payments and terms for a construction project.",
            "icon" => "construction_loan_calculator.png",
        ],
        "construction_timeline_calculator" => [
            "name" => "Construction Timeline Estimate",
            "url" => "/tools/construction-timeline-calculator",
            "desc" => "Plan and schedule the timeline for a construction project.",
            "icon" => "construction_timeline_calculator.png",
        ],
        "crown_molding_calculator" => [
            "name" => "Crown Molding Calculator",
            "url" => "/tools/crown-molding-calculator",
            "desc" => "Estimate the amount of crown molding required for a room or space.",
            "icon" => "crown_molding_calculator.png",
        ],
        "deck_material_calculator" => [
            "name" => "Deck Material Calculator",
            "url" => "/tools/deck-material-calculator",
            "desc" => "Calculate the materials needed for building a deck, including wood and screws.",
            "icon" => "deck_material_calculator.png",
        ],
        "duct_size_calculator" => [
            "name" => "Duct Size Calculator",
            "url" => "/tools/duct-size-calculator",
            "desc" => "Determine the appropriate size of ducts for HVAC systems based on specifications.",
            "icon" => "duct_size_calculator.png",
        ],
        "electrical_load_calculator" => [
            "name" => "Electrical Load Calculator",
            "url" => "/tools/electrical-load-calculator",
            "desc" => "Calculate the electrical load for a building or space to ensure proper wiring.",
            "icon" => "electrical_load_calculator.png",
        ],
        "firewood_calculator" => [
            "name" => "Firewood Calculator",
            "url" => "/tools/firewood-calculator",
            "desc" => "Estimate the amount of firewood needed for heating based on usage and type of wood.",
            "icon" => "firewood_calculator.png",
        ],
        "flooring_calculator" => [
            "name" => "Flooring Calculator",
            "url" => "/tools/flooring-calculator",
            "desc" => "Determine the amount of flooring materials required for a room or area.",
            "icon" => "flooring_calculator.png",
        ],
        "foundation_calculator" => [
            "name" => "Foundation Calculator",
            "url" => "/tools/foundation-calculator",
            "desc" => "Calculate the materials needed for building a strong foundation for a structure.",
            "icon" => "foundation_calculator.png",
        ],
        "framing_calculator" => [
            "name" => "Framing Calculator",
            "url" => "/tools/framing-calculator",
            "desc" => "Estimate the materials required for framing walls and structures.",
            "icon" => "framing_calculator.png",
        ],
        "gravel_calculator" => [
            "name" => "Gravel Calculator",
            "url" => "/tools/gravel-calculator",
            "desc" => "Calculate the quantity of gravel needed for landscaping or construction projects.",
            "icon" => "gravel_calculator.png",
        ],
        "hvac_load_calculator" => [
            "name" => "HVAC Load Calculator",
            "url" => "/tools/hvac-load-calculator",
            "desc" => "Determine the heating and cooling load requirements for HVAC system sizing.",
            "icon" => "hvac_load_calculator.png",
        ],
        "insulation_calculator" => [
            "name" => "Insulation Calculator",
            "url" => "/tools/insulation-calculator",
            "desc" => "Estimate the amount of insulation needed for walls, roofs, and floors.",
            "icon" => "insulation_calculator.png",
        ],
        "joist_and_rafter_calculator" => [
            "name" => "Joist and Rafter Calculator",
            "url" => "/tools/joist-and-rafter-calculator",
            "desc" => "Calculate the dimensions and materials required for joists and rafters in construction.",
            "icon" => "joist_and_rafter_calculator.png",
        ],
        "land_affordability_calculator" => [
            "name" => "Land Affordability Calculator",
            "url" => "/tools/land-affordability-calculator",
            "desc" => "Estimate the affordability of purchasing land based on financial considerations.",
            "icon" => "land_affordability_calculator.png",
        ],
        "landscaping_sod_calculator" => [
            "name" => "Landscaping Sod Calculator",
            "url" => "/tools/landscaping-sod-calculator",
            "desc" => "Calculate the amount of sod needed for landscaping projects.",
            "icon" => "landscaping_sod_calculator.png",
        ],
        "loan_amortization_calculator" => [
            "name" => "Loan Amortization Calculator",
            "url" => "/tools/loan-amortization-calculator",
            "desc" => "Determine the amortization schedule for a loan, including interest and principal payments.",
            "icon" => "loan_amortization_calculator.png",
        ],
        "mulch_calculator" => [
            "name" => "Mulch Calculator",
            "url" => "/tools/mulch-calculator",
            "desc" => "Calculate the quantity of mulch needed for landscaping projects.",
            "icon" => "mulch_calculator.png",
        ],
        "mortgage_affordability_calculator" => [
            "name" => "Mortgage Affordability Calculator",
            "url" => "/tools/mortgage-affordability-calculator",
            "desc" => "Estimate the affordability of a mortgage based on income and expenses.",
            "icon" => "mortgage_affordability_calculator.png",
        ],
        "mortgage_insurance_calculator" => [
            "name" => "Mortgage Insurance Calculator",
            "url" => "/tools/mortgage-insurance-calculator",
            "desc" => "Calculate the cost of mortgage insurance based on loan details.",
            "icon" => "mortgage_insurance_calculator.png",
        ],
        "paint_calculator" => [
            "name" => "Paint Calculator",
            "url" => "/tools/paint-calculator",
            "desc" => "Estimate the amount of paint needed for a room or surface.",
            "icon" => "paint_calculator.png",
        ],
        "paint_coverage_calculator" => [
            "name" => "Paint Coverage Calculator",
            "url" => "/tools/paint-coverage-calculator",
            "desc" => "Determine the coverage of paint based on the area to be painted.",
            "icon" => "paint_coverage_calculator.png",
        ],
        "patio_paver_calculator" => [
            "name" => "Patio Paver Calculator",
            "url" => "/tools/patio-paver-calculator",
            "desc" => "Calculate the number of patio pavers needed for a patio or walkway.",
            "icon" => "patio_paver_calculator.png",
        ],
        "paver_calculator" => [
            "name" => "Paver Calculator",
            "url" => "/tools/paver-calculator",
            "desc" => "Estimate the materials required for installing pavers in landscaping projects.",
            "icon" => "paver_calculator.png",
        ],
        "plant_spacing_calculator" => [
            "name" => "Plant Spacing Calculator",
            "url" => "/tools/plant-spacing-calculator",
            "desc" => "Determine the optimal spacing for planting various types of plants.",
            "icon" => "plant_spacing_calculator.png",
        ],
        "plumbing_pipe_sizing_calculator" => [
            "name" => "Plumbing Pipe Sizing Calculator",
            "url" => "/tools/plumbing-pipe-sizing-calculator",
            "desc" => "Calculate the appropriate size of plumbing pipes for water distribution.",
            "icon" => "plumbing_pipe_sizing_calculator.png",
        ],
        "property_tax_calculator" => [
            "name" => "Property Tax Calculator",
            "url" => "/tools/property-tax-calculator",
            "desc" => "Estimate property taxes based on property value and tax rates.",
            "icon" => "property_tax_calculator.png",
        ],
        "project_management_cost_estimator" => [
            "name" => "Project Management Cost Estimator",
            "url" => "/tools/project-management-cost-estimator",
            "desc" => "Estimate the cost of project management services for construction projects.",
            "icon" => "project_management_cost_estimator.png",
        ],
        "remodeling_cost_estimator" => [
            "name" => "Remodeling Cost Estimator",
            "url" => "/tools/remodeling-cost-estimator",
            "desc" => "Estimate the cost of remodeling projects based on various factors.",
            "icon" => "remodeling_cost_estimator.png",
        ],
        "return_on_investment_calculator" => [
            "name" => "Return on Investment Calculator",
            "url" => "/tools/return-on-investment-calculator",
            "desc" => "Calculate the return on investment for home improvement or construction projects.",
            "icon" => "return_on_investment_calculator.png",
        ],
        "roof_pitch_calculator" => [
            "name" => "Roof Pitch Calculator",
            "url" => "/tools/roof-pitch-calculator",
            "desc" => "Determine the pitch or slope of a roof based on rise and run measurements.",
            "icon" => "roof_pitch_calculator.png",
        ],
        "roofing_calculator" => [
            "name" => "Roofing Calculator",
            "url" => "/tools/roofing-calculator",
            "desc" => "Estimate the materials needed for roofing projects, including shingles and underlayment.",
            "icon" => "roofing_calculator.png",
        ],
        "sewage_pipe_size_calculator" => [
            "name" => "Sewage Pipe Size Calculator",
            "url" => "/tools/sewage-pipe-size-calculator",
            "desc" => "Calculate the appropriate size of sewage pipes for waste disposal.",
            "icon" => "sewage_pipe_size_calculator.png",
        ],
        "shingle_calculator" => [
            "name" => "Shingle Calculator",
            "url" => "/tools/shingle-calculator",
            "desc" => "Estimate the number of roof shingles needed for roofing projects.",
            "icon" => "shingle_calculator.png",
        ],
        "sod_calculator" => [
            "name" => "Sod Calculator",
            "url" => "/tools/sod-calculator",
            "desc" => "Calculate the amount of sod needed for landscaping and lawn installation.",
            "icon" => "sod_calculator.png",
        ],
        "solar_panel_calculator" => [
            "name" => "Solar Panel Calculator",
            "url" => "/tools/solar-panel-calculator",
            "desc" => "Estimate the number of solar panels required for a solar power system.",
            "icon" => "solar_panel_calculator.png",
        ],
        "stud_calculator" => [
            "name" => "Stud Calculator",
            "url" => "/tools/stud-calculator",
            "desc" => "Calculate the number of studs needed for framing walls in construction.",
            "icon" => "stud_calculator.png",
        ],
        "tile_calculator" => [
            "name" => "Tile Calculator",
            "url" => "/tools/tile-calculator",
            "desc" => "Estimate the amount of tile needed for flooring, walls, or backsplashes.",
            "icon" => "tile_calculator.png",
        ],
        "water_flow_rate_calculator" => [
            "name" => "Water Flow Rate Calculator",
            "url" => "/tools/water-flow-rate-calculator",
            "desc" => "Calculate the flow rate of water through pipes for plumbing systems.",
            "icon" => "water_flow_rate_calculator.png",
        ],
        "water_heater_size_calculator" => [
            "name" => "Water Heater Size Calculator",
            "url" => "/tools/water-heater-size-calculator",
            "desc" => "Determine the appropriate size of a water heater based on usage and requirements.",
            "icon" => "water_heater_size_calculator.png",
        ],
        "window_efficiency_calculator" => [
            "name" => "Window Efficiency Calculator",
            "url" => "/tools/window-efficiency-calculator",
            "desc" => "Evaluate the energy efficiency of windows based on specifications.",
            "icon" => "window_efficiency_calculator.png",
        ],
        "home_insurance_coverage_calculator" => [
            "name" => "Home Insurance Calculator",
            "url" => "/tools/home-insurance-coverage-calculator",
            "desc" => "Estimate the coverage needed for home insurance based on property value and details.",
            "icon" => "home_insurance_coverage_calculator.png",
        ],
        "home_value_estimator" => [
            "name" => "Home Value Estimator",
            "url" => "/tools/home-value-estimator",
            "desc" => "Estimate the current value of a home based on various factors and market conditions.",
            "icon" => "home_value_estimator.png",
        ],
        "roi_calculator_for_home_improvements" => [
            "name" => "ROI for Home Improvements",
            "url" => "/tools/roi-calculator-for-home-improvements",
            "desc" => "Calculate the return on investment for home improvement projects.",
            "icon" => "roi_calculator_for_home_improvements.png",
        ],
    ]
);

//vendor entry menus
DEFINE(
    "VENDOR_MENUS",
    $vendorMenu = [
        'v_dashboard' => [
            'name' => 'Vendor Dashboard',
            'icon' => 'fa fa-home',
            'module' => 'view_dashboard.php'
        ],
        'v_contracts' => [
            'name' => 'Vendor Leads',
            'icon' => 'fa fa-file-pdf',
            'module' => 'view_contracts.php'
        ],
        'v_subscription' => [
            'name' => 'Vendor Subscriptions',
            'icon' => 'fa fa-refresh',
            'module' => 'view_subscriptions.php'
        ],
        'v_purchase_invoices' => [
            'name' => 'Vendor Invoices',
            'icon' => 'fa fa-file-excel',
            'module' => 'view_purchase_invoices.php'
        ],
        'v_purchase_payments' => [
            'name' => 'Vendor Payments',
            'icon' => 'fa fa-arrow-up',
            'module' => 'view_purchase_payments.php'
        ],
        'v_documents' => [
            'name' => 'Vendor Documents',
            'icon' => 'fa fa-file',
            'module' => 'view_documents.php'
        ],
        'v_addresses' => [
            'name' => 'Vendor Addresses',
            'icon' => 'fa fa-map-marker',
            'module' => 'view_addresses.php'
        ],
        'v_profile' => [
            'name' => 'Vendor Profile',
            'icon' => 'fa fa-user',
            'module' => 'view_profile.php'
        ],
        'v_logs' => [
            'name' => 'Vendor Logs',
            'icon' => 'fa fa-tachometer',
            'module' => 'view_logs.php'
        ]
    ]
);

//types of enquiries
DEFINE("ENQUIRY_MENUS", [
    "enquiry_1" => [
        'name' => 'Website Enquiries',
        'dir' => 'website_enquiries.php',
        'icon' => "globe"
    ],
    "enquiry_2" => [
        'name' => 'Contact Us Enquiries',
        'dir' => 'contact_us_enquiries.php',
        'icon' => "phone"
    ],
    "enquiry_3" => [
        'name' => 'Support Enquiries',
        'dir' => 'support_enquiries.php',
        'icon' => "comments"
    ],
    "enquiry_4" => [
        'name' => 'Business Enquiries',
        'dir' => 'business_enquiries.php',
        'icon' => "building"
    ],
    "enquiry_5" => [
        'name' => 'Customers Enquiries',
        'dir' => 'customers_enquiries.php',
        'icon' => "users"
    ],
    "enquiry_6" => [
        'name' => 'Joining/Vacancy Enquiries',
        'dir' => 'joining_vacancy_enquiries.php',
        'icon' => "building-o"
    ],
    "enquiry_7" => [
        'name' => 'Vendor Enquiries',
        'dir' => 'vendor_enquiries.php',
        'icon' => "user-plus"
    ],
    "enquiry_8" => [
        'name' => 'Marketing/Advertising Enquiries',
        'dir' => 'marketing_advertising_enquiries.php',
        'icon' => "bullhorn"
    ],
    "enquiry_9" => [
        'name' => 'General Inquiries',
        'dir' => 'general_inquiries.php',
        'icon' => "info-circle"
    ],
    "enquiry_10" => [
        'name' => 'Feedback/Complaints',
        'dir' => 'feedback_complaints.php',
        'icon' => "comments-o"
    ],
    "enquiry_11" => [
        'name' => 'Technical Support Enquiries',
        'dir' => 'technical_support_enquiries.php',
        'icon' => "question-circle"
    ],
    "enquiry_12" => [
        'name' => 'Sales Enquiries',
        'dir' => 'sales_enquiries.php',
        'icon' => "money"
    ],
    "enquiry_13" => [
        'name' => 'Reviews Submission',
        'dir' => 'reviews_submission.php',
        'icon' => "star-half-o"
    ]
]);


//customer menus
define(
    "CUSTOMER_MENUS",
    [
        'link1' => [
            'dir' => DOMAIN . '/account',
            'icon' => 'fa-tachometer',
            'name' => 'My Dashboard'
        ],
        'link2' => [
            'dir' => DOMAIN . '/account/published-work',
            'icon' => 'fa-list',
            'name' => 'Published Works'
        ],
        'link3' => [
            'dir' => DOMAIN . '/account/orders',
            'icon' => 'fa-table',
            'name' => 'My Orders'
        ],
        'link4' => [
            'dir' => DOMAIN . '/account/activities',
            'icon' => 'fa-tasks',
            'name' => 'All Activities'
        ],
        'link5' => [
            'dir' => DOMAIN . '/account/invoices',
            'icon' => 'fa-file-pdf-o',
            'name' => 'Invoices'
        ],
        'link6' => [
            'dir' => DOMAIN . '/account/transactions',
            'icon' => 'fa-exchange',
            'name' => 'Transactions'
        ],
        'link7' => [
            'dir' => DOMAIN . '/account/support',
            'icon' => 'fa-info-circle',
            'name' => 'Support'
        ],
        'link8' => [
            'dir' => DOMAIN . '/account/notifications',
            'icon' => 'fa-bell',
            'name' => 'Notifications'
        ],
        'link9' => [
            'dir' => DOMAIN . '/account/settings',
            'icon' => 'fa-user',
            'name' => 'Profile'
        ],
        'link10' => [
            'dir' => DOMAIN . '/auth/logout',
            'icon' => 'fa-sign-out',
            'name' => 'Logout'
        ]
    ]
);

//define 
DEFINE("LEAD_MENUS", [
    "enquiry_1" => [
        'name' => 'Website Leads',
        'dir' => 'website_enquiries.php',
        'icon' => "globe"
    ],
    "enquiry_2" => [
        'name' => 'Meta Leads',
        'dir' => 'website_enquiries.php',
        'icon' => "facebook"
    ],
    "enquiry_3" => [
        'name' => 'Google Leads',
        'dir' => 'website_enquiries.php',
        'icon' => "google"
    ],
    "enquiry_3" => [
        'name' => 'Offline Leads',
        'dir' => 'website_enquiries.php',
        'icon' => "edit"
    ],
    "enquiry_4" => [
        'name' => 'Team Leads',
        'dir' => 'website_enquiries.php',
        'icon' => "users"
    ],
]);

//define measurement units
define("MEASUREMENT_UNITS", [
    // Length/Distance
    "meter" => "PER METER",
    "kilometer" => "PER KILOMETER",
    "centimeter" => "PER CENTIMETER",
    "millimeter" => "PER MILLIMETER",
    "micrometer" => "PER MICROMETER",
    "nanometer" => "PER NANOMETER",
    "mile" => "PER MILE",
    "yard" => "PER YARD",
    "foot" => "PER FOOT",
    "inch" => "PER INCH",
    "nautical_mile" => "PER NAUTICAL MILE",

    // Mass/Weight
    "kilogram" => "PER KILOGRAM",
    "gram" => "PER GRAM",
    "milligram" => "PER MILLIGRAM",
    "microgram" => "PER MICROGRAM",
    "metric_ton" => "PER METRIC TON",
    "pound" => "PER POUND",
    "ounce" => "PER OUNCE",
    "stone" => "PER STONE",
    "ton_us" => "PER TON (US)",
    "long_ton" => "PER LONG TON",

    // Volume
    "liter" => "PER LITER",
    "milliliter" => "PER MILLILITER",
    "cubic_meter" => "PER CUBIC METER",
    "gallon_us" => "PER GALLON (US)",
    "gallon_uk" => "PER GALLON (UK)",
    "quart" => "PER QUART",
    "pint" => "PER PINT",
    "cup" => "PER CUP",
    "fluid_ounce" => "PER FLUID OUNCE",
    "cubic_inch" => "PER CUBIC INCH",
    "cubic_foot" => "PER CUBIC FOOT",

    // Area
    "square_meter" => "PER SQUARE METER",
    "square_kilometer" => "PER SQUARE KILOMETER",
    "hectare" => "PER HECTARE",
    "acre" => "PER ACRE",
    "square_foot" => "PER SQUARE FOOT",
    "square_yard" => "PER SQUARE YARD",
    "square_inch" => "PER SQUARE INCH",

    // Temperature
    "celsius" => "PER CELSIUS",
    "fahrenheit" => "PER FAHRENHEIT",
    "kelvin" => "PER KELVIN",

    // Speed/Velocity
    "meter_per_second" => "PER METER PER SECOND",
    "kilometer_per_hour" => "PER KILOMETER PER HOUR",
    "mile_per_hour" => "PER MILE PER HOUR",
    "knots" => "PER KNOTS",

    // Energy
    "joule" => "PER JOULE",
    "calorie" => "PER CALORIE",
    "kilocalorie" => "PER KILOCALORIE",
    "kilowatt_hour" => "PER KILOWATT HOUR",

    // Power
    "watt" => "PER WATT",
    "kilowatt" => "PER KILOWATT",
    "horsepower" => "PER HORSEPOWER",

    // Pressure
    "pascal" => "PER PASCAL",
    "bar" => "PER BAR",
    "atmosphere" => "PER ATMOSPHERE",
    "psi" => "PER PSI",

    // Force
    "newton" => "PER NEWTON",
    "pound_force" => "PER POUND FORCE",

    // Time
    "second" => "PER SECOND",
    "minute" => "PER MINUTE",
    "hour" => "PER HOUR",
    "day" => "PER DAY",
    "week" => "PER WEEK",
    "month" => "PER MONTH",
    "year" => "PER YEAR",

    // Frequency
    "hertz" => "PER HERTZ",

    // Electric Current
    "ampere" => "PER AMPERE",
    "coulomb" => "PER COULOMB",

    // Electric Voltage
    "volt" => "PER VOLT",

    // Electric Resistance
    "ohm" => "PER OHM"
]);
