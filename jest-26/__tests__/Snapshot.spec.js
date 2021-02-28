describe('A test with snapshots', () => {
    it('Matches snapshot', () => {
        expect('Velit dolore laboris qui est.').toMatchSnapshot()
    })

    it('Matches HTML snapshot', () => {
        const html = `<div>
  <h2>Hello world!</h2>
  <p>Esse excepteur aliqua proident aliquip deserunt fugiat officia et consequat sit sint aliqua exercitation.</p>
  <small>Culpa cupidatat ut velit aliqua.</small>
</div>`
        expect(html).toMatchSnapshot()
    })

    it('Does not match snapshot', () => {
        expect('Anim ea ea velit aliqua quis Lorem dolor.').toMatchSnapshot()
    })

    it('Does not match HTML snapshot', () => {
        const html = `<div>
  <h2>Hello, there!</h2>
  <p class="wrong">Ad do ipsum anim excepteur aute commodo quis ullamco.</p>
  <sub>Culpa elit minim non ut velit mollit ullamco ea.</sub>
</div>`
        expect(html).toMatchSnapshot()
    })
})
