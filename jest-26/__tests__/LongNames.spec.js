describe('A test suite with long names', () => {
    test.each([
        'Mollit nulla sint Lorem non veniam ipsum officia ad culpa sint ea.',
        'Eu enim sunt ullamco Lorem sint sit ipsum.',
        'Dolor esse Lorem dolore nostrud velit et ea sunt.',
        'Proident in reprehenderit et dolor labore veniam eiusmod irure qui Lorem voluptate incididunt eu ad.',
        'Veniam ea laboris dolore qui velit enim laborum ullamco consequat ullamco sint enim.',
        'Commodo voluptate mollit quis incididunt nulla pariatur esse.',
        'Occaecat eu nulla reprehenderit commodo cupidatat ex ea.'
    ])('will produce a very long name that should be truncated: "%s"', async (name) => {
        expect(true).toBe(true)
    })
})
