import fetch from 'isomorphic-unfetch'

const Page = (props) => {
    return (
        <div>
            <h1>NextJS Home Page</h1>
            <h3>below content from api server</h3>
            {
                props.data.map((row, key)=> {
                    return (<div key={key}>{row}</div>)
                })
            }
        </div>
    )
}

Page.getInitialProps = async ctx => {
    const res = await fetch('/api/demo')
    const json = await res.json()
    return { data: json }
}

export default Page;