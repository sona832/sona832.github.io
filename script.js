// Sample blog post data (you can replace this with actual data from a server or API)
const blogPostsData = [
    {
        title: "First Blog Post",
        content: "This is my first blog post. Welcome to my blog!",
        date: "2023-07-30"
    },
    {
        title: "Second Blog Post",
        content: "This is my second blog post. Thanks for reading!",
        date: "2023-07-31"
    }
];

// Function to display blog posts on the page
function displayBlogPosts() {
    const blogPostsContainer = document.getElementById("blogPosts");

    blogPostsData.forEach(post => {
        const postDiv = document.createElement("div");
        postDiv.classList.add("blog-post");

        const titleElement = document.createElement("h2");
        titleElement.textContent = post.title;

        const dateElement = document.createElement("p");
        dateElement.textContent = "Published on " + post.date;

        const contentElement = document.createElement("p");
        contentElement.textContent = post.content;

        postDiv.appendChild(titleElement);
        postDiv.appendChild(dateElement);
        postDiv.appendChild(contentElement);

        blogPostsContainer.appendChild(postDiv);
    });
}

// Call the function to display blog posts when the page loads
window.addEventListener("load", displayBlogPosts);
