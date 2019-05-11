import htm from "https://unpkg.com/htm?module";
import format from "https://unpkg.com/date-fns@2.0.0-alpha.2/esm/format/index.js?module";

const html = htm.bind(h);

// Preview component for a Post
const Post = createClass({
  render() {
    const entry = this.props.entry;

    return html`
      <main>
        <article>
          <p/>
          <h1>${entry.getIn(["data", "title"], null)}</h1>
          <p>${entry.getIn(["data", "description"], null)}</p>
          <p>
            <small>
              <time
                >${
                  format(
                    entry.getIn(["data", "date"], new Date().parse),
                    "DD MMM, YYYY"
                  )
                }</time
              >, by ${entry.getIn(["data", "author"], null)}
            </small>
          </p>
          <p>
            ${
              entry.getIn(["data", "categories"], []).map(
                category =>
                  html`
                    <a href="#" rel="tag">${category}</a>
                  `
              )
            }
          </p>
          ${this.props.widgetFor("body")}
        </article>
      </main>
    `;
  }
});

// Register the Post component as the preview for entries in the blog collection
CMS.registerPreviewTemplate("posts", Post);

CMS.registerPreviewStyle("/assets/css/main.css");
// Register any CSS file on the home page as a preview style
fetch("/")
  .then(response => response.text())
  .then(html => {
    const f = document.createElement("html");
    f.innerHTML = html;
    Array.from(f.getElementsByTagName("link")).forEach(tag => {
      if (tag.rel == "stylesheet" && !tag.media) {
        CMS.registerPreviewStyle(tag.href);
      }
    });
  });
