class BeerSlider {
  constructor(element, { start = "50" } = {}) {
    this.start = parseInt(start)
      ? Math.min(100, Math.max(0, parseInt(start)))
      : 50;
    this.element = element;
    this.revealContainer = this.element.children[1];
    this.revealElement = this.revealContainer.children[0];
    this.range = this.addElement("input", {
      type: "range",
      class: `beer-range`,
      "aria-label": "Percent of revealed content",
      "aria-valuemin": "0",
      "aria-valuemax": "100",
      "aria-valuenow": this.start,
      value: this.start,
      min: "0",
      max: "100"
    });
    this.handle = this.addElement("span", {
      class: `beer-handle`
    });
    this.onImagesLoad();
  }
  init() {
    this.element.classList.add(`beer-ready`);
    this.move();
    this.addListeners();
  }
  loadingImg(src) {
    return new Promise((resolve, reject) => {
      if (!src) {
        resolve();
      }
      const img = new Image();
      img.onload = () => resolve();
      img.onerror = () => reject();
      img.src = src;
    });
  }
  loadedBoth() {
    const mainImageSrc =
      this.element.children[0].src ||
      this.element.children[0].getAttribute(`data-beer-src`);
    const revealImageSrc =
      this.revealElement.src ||
      this.revealElement.getAttribute(`data-beer-src`);
    return Promise.all([
      this.loadingImg(mainImageSrc),
      this.loadingImg(revealImageSrc)
    ]);
  }
  onImagesLoad() {
    if (!this.revealElement) {
      return;
    }
    this.loadedBoth().then(
      () => {
        this.init();
      },
      () => {
        console.error("Some errors occurred and images are not loaded.");
      }
    );
  }
  addElement(tag, attributes) {
    const el = document.createElement(tag);
    Object.keys(attributes).forEach((key) => {
      el.setAttribute(key, attributes[key]);
    });
    this.element.appendChild(el);
    return el;
  }
  addListeners() {
    const eventTypes = ["input", "change"];
    eventTypes.forEach((i) => {
      this.range.addEventListener(i, () => {
        this.move();
      });
    });
  }
  move() {
    this.revealContainer.style.setProperty("--width", `${this.range.value}%`);
    this.handle.style.left = `${this.range.value}%`;
    this.range.setAttribute("aria-valuenow", this.range.value);
    if (this.range.value > 55) {
      this.element.classList.add("more");
    } else {
      this.element.classList.remove("more");
      if (this.range.value < 45) {
        this.element.classList.add("less");
      } else {
        this.element.classList.remove("less");
      }
    }
  }
}

new BeerSlider(document.getElementById("slider"), { start: 30 });
