const url = new URL(location.href)
// url.origin = 'https://jinjiang.dev'
url.hostname = 'jinjiang.dev'
url.port = ''
url.protocol = 'https'
location.href = url.toString()
