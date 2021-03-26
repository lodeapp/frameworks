describe("A test with snapshots", () => {
    it("Passes, but has nothing to do with snapshots", () => {
        expect("Velit dolore laboris qui est.")
            .toEqual("Velit dolore laboris qui est.");
    })

    it("Fails, but has nothing to do with snapshots", () => {
        expect("Velit dolore laboris qui est.")
            .toEqual("Nisi occaecat ullamco laborum laborum voluptate consectetur do minim et officia enim.");
    })

    it("Matches snapshot", () => {
        expect("Velit dolore laboris qui est.").toMatchInlineSnapshot(
            `"Velit dolore laboris qui est."`
        );
    });

    it("Matches HTML snapshot", () => {
        const html = `<div>
  <h2>Hello world!</h2>
  <p>Esse excepteur aliqua proident aliquip deserunt fugiat officia et consequat sit sint aliqua exercitation.</p>
  <small>Culpa cupidatat ut velit aliqua.</small>
</div>`;
        expect(html).toMatchInlineSnapshot(`
            "<div>
              <h2>Hello world!</h2>
              <p>Esse excepteur aliqua proident aliquip deserunt fugiat officia et consequat sit sint aliqua exercitation.</p>
              <small>Culpa cupidatat ut velit aliqua.</small>
            </div>"
        `);
    });

    it("Does not match snapshot", () => {
        expect(
            "Anim ea ea velit aliqua quis Lorem dolor."
        ).toMatchInlineSnapshot(`"Nisi occaecat ullamco laborum laborum voluptate consectetur do minim et officia enim."`);
    });

    it("Does not match HTML snapshot", () => {
        const html = `<div>
  <h2>Hello, there!</h2>
  <p class="wrong">Ad do ipsum anim excepteur aute commodo quis ullamco.</p>
  <sub>Culpa elit minim non ut velit mollit ullamco ea.</sub>
</div>`;
        expect(html).toMatchInlineSnapshot(`
            "<div>
              <h2>Hello world!</h2>
              <p>Esse excepteur aliqua proident aliquip deserunt fugiat officia et consequat sit sint aliqua exercitation.</p>
              <small>Culpa cupidatat ut velit aliqua.</small>
            </div>"
        `);
    });
});
