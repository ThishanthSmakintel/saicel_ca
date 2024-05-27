$(document).ready(function () {
    let mostVisitedPagesChart;
    let mostVisitedProductsChart;

    const updateMostVisitedPagesChart = (data) => {
        // Destroy the existing chart if it exists
        if (mostVisitedPagesChart) {
            console.log("Destroying existing mostVisitedPagesChart");
            mostVisitedPagesChart.destroy();
        }

        const mostVisitedPages = data.mostVisitedPages;
        console.log("Most visited pages data:", mostVisitedPages);
        const pageLabels = mostVisitedPages.map((page) => page.page_visited);
        console.log("Page labels:", pageLabels);
        const pageVisits = mostVisitedPages.map((page) => page.visits);
        console.log("Page visits:", pageVisits);

        const ctx = document
            .getElementById("mostVisitedPagesChart")
            .getContext("2d");
        console.log("Creating new mostVisitedPagesChart");
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

    const updateMostVisitedProductsChart = (data) => {
        // Destroy the existing chart if it exists
        if (mostVisitedProductsChart) {
            console.log("Destroying existing mostVisitedProductsChart");
            mostVisitedProductsChart.destroy();
        }

        const mostVisitedProducts = data.mostVisitedProducts;
        console.log("Most visited products data:", mostVisitedProducts);
        const productLabels = mostVisitedProducts.map(
            (product) => product.name
        );
        console.log("Product labels:", productLabels);
        const productVisits = mostVisitedProducts.map(
            (product) => product.visits
        );
        console.log("Product visits:", productVisits);

        const ctx = document
            .getElementById("mostVisitedProductsChart")
            .getContext("2d");
        console.log("Creating new mostVisitedProductsChart");
        mostVisitedProductsChart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: productLabels,
                datasets: [
                    {
                        label: "Visits",
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

    const visitorCountEventSource = new EventSource(route("sse.visitor-count"));
    const mostVisitedPagesEventSource = new EventSource(
        route("sse.most-visited-pages")
    );
    const mostVisitedProductsEventSource = new EventSource(
        route("sse.most-visited-products")
    );

    visitorCountEventSource.onmessage = function (event) {
        const data = JSON.parse(event.data);
        $("#visitorCount").text(data.visitorCount);
        console.log("Visitor count data:", data);
    };

    mostVisitedPagesEventSource.onmessage = function (event) {
        const data = JSON.parse(event.data);
        console.log("Received most visited pages data:", data);
        updateMostVisitedPagesChart(data);
    };

    mostVisitedProductsEventSource.onmessage = function (event) {
        const data = JSON.parse(event.data);
        console.log("Received most visited products data:", data);
        updateMostVisitedProductsChart(data);
    };

    const handleError = (event) => {
        console.error("EventSource failed:", event);
        visitorCountEventSource.close();
        mostVisitedPagesEventSource.close();
        mostVisitedProductsEventSource.close();
    };

    visitorCountEventSource.onerror = handleError;
    mostVisitedPagesEventSource.onerror = handleError;
    mostVisitedProductsEventSource.onerror = handleError;
});
