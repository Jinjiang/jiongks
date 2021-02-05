const url = new URL(location.href)
url.host = 'jinjiang.dev'
location.href = url.toString()
