<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <script src="./assets/css/tailwind.js"></script>
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- Hero Section -->
    <header class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
            <h1 class="text-5xl font-extrabold mb-4">
                Welcome to Your Dream Product
            </h1>
            <p class="text-lg font-medium mb-6">
                Discover how we can help you achieve your goals faster and smarter.
            </p>
            <div class="flex justify-center space-x-4">
                <a href="#features" class="bg-white text-indigo-500 font-semibold py-3 px-6 rounded-lg shadow-md hover:bg-gray-100 transition duration-300">
                    Learn More
                </a>
                <a href="#cta" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-lg shadow-md transition duration-300">
                    Get Started
                </a>
            </div>
        </div>
    </header>

    <!-- Features Section -->
    <section id="features" class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">
                Why Choose Us?
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 bg-white rounded-lg shadow-lg text-center">
                    <div class="mb-4 text-indigo-500">
                        <svg class="w-12 h-12 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M9 21v-7m6 0a9 9 0 100-18h3m0 3a9 9 0 110 18h-3z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Feature One</h3>
                    <p class="text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, voluptatem.
                    </p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-lg text-center">
                    <div class="mb-4 text-indigo-500">
                        <svg class="w-12 h-12 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V7m5 5H6m13-6v18m0-9h2m0-9H9m0 18h6m0-6H6" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Feature Two</h3>
                    <p class="text-gray-600">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.
                    </p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-lg text-center">
                    <div class="mb-4 text-indigo-500">
                        <svg class="w-12 h-12 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6M9 9h6M9 15h6m0-3h6M3 12h6m-6 6h6m6 3v-6m6 3h-6" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Feature Three</h3>
                    <p class="text-gray-600">
                        Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    <section id="cta" class="bg-indigo-600 text-white py-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold mb-4">
                Ready to Get Started?
            </h2>
            <p class="text-lg mb-6">
                Join thousands of others who have already transformed their lives.
            </p>
            <a href="signup.php" class="bg-white text-indigo-600 font-semibold py-3 px-6 rounded-lg shadow-lg hover:bg-gray-100 transition duration-300">
                Sign Up Now
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-400 py-6">
        <div class="max-w-6xl mx-auto text-center">
            <p>&copy; 2025 Your Company Name. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
