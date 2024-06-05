$(document).ready(function () {
    let mostVisitedPagesChart;
    let mostVisitedProductsChart;

    const createMostVisitedPagesChart = (data) => {
        const mostVisitedPages = data.mostVisitedPages;
        const pageLabels = mostVisitedPages.map((page) => page.page_visited);
        const pageVisits = mostVisitedPages.map((page) => page.visits);

        const ctx = document
            .getElementById("mostVisitedPagesChart")
            .getContext("2d");
        mostVisitedPagesChart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: pageLabels,
                datasets: [
                    {
                        label: "Visits",
                        data: pageVisits,
                        backgroundColor: "rgba(54, 162, 235, 0.2)",
                        borderColor: "rgba(54, 162, 235, 1)",
                        borderWidth: 1,
                    },
                ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    };

    const createMostVisitedProductsChart = (data) => {
        const mostVisitedProducts = data.mostVisitedProducts;
        const productLabels = mostVisitedProducts.map(
            (product) => product.name
        );
        const productVisits = mostVisitedProducts.map(
            (product) => product.visit_status
        );

        const ctx = document
            .getElementById("mostVisitedProductsChart")
            .getContext("2d");
        mostVisitedProductsChart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: productLabels,
                datasets: [
                    {
                        label: "Visit Status",
                        data: productVisits,
                        backgroundColor: "rgba(255, 99, 132, 0.2)",
                        borderColor: "rgba(255, 99, 132, 1)",
                        borderWidth: 1,
                    },
                ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    };

    const fetchData = (routeName, callback) => {
        const url = route(routeName);
        console.log("Fetching data from URL:", url);
        fetch(url)
            .then((response) => response.json())
            .then((data) => {
                console.log("Received data from URL:", url, data);
                callback(data);
            })
            .catch((error) => {
                console.error("Error fetching data from URL:", url, error);
            });
    };

    const fetchVisitorCount = () => {
        fetchData("sse.visitor-count", (data) => {
            console.log("Received visitor count data:", data);
            $("#visitorCount").text(data.visitorCount);
        });
    };

    const fetchMostVisitedPages = () => {
        fetchData("sse.most-visited-pages", (data) => {
            console.log("Received most visited pages data:", data);
            if (!mostVisitedPagesChart) {
                createMostVisitedPagesChart(data);
            } else {
                const mostVisitedPages = data.mostVisitedPages;
                const pageLabels = mostVisitedPages.map(
                    (page) => page.page_visited
                );
                const pageVisits = mostVisitedPages.map((page) => page.visits);
                mostVisitedPagesChart.data.labels = pageLabels;
                mostVisitedPagesChart.data.datasets[0].data = pageVisits;
                mostVisitedPagesChart.update();
            }
        });
    };

    const fetchMostVisitedProducts = () => {
        fetchData("sse.productVisitStatus", (data) => {
            console.log("Received most visited products data:", data);
            if (!mostVisitedProductsChart) {
                createMostVisitedProductsChart(data);
            } else {
                const mostVisitedProducts = data.mostVisitedProducts;
                const productLabels = mostVisitedProducts.map(
                    (product) => product.name
                );
                const productVisits = mostVisitedProducts.map(
                    (product) => product.visit_status
                );
                mostVisitedProductsChart.data.labels = productLabels;
                mostVisitedProductsChart.data.datasets[0].data = productVisits;
                mostVisitedProductsChart.update();
            }
        });
    };

    // Fetch data initially
    fetchVisitorCount();
    fetchMostVisitedPages();
    fetchMostVisitedProducts();

    // Set intervals to fetch data every 15 seconds
    setInterval(fetchVisitorCount, 15000);
    setInterval(fetchMostVisitedPages, 15000);
    setInterval(fetchMostVisitedProducts, 15000);
});
