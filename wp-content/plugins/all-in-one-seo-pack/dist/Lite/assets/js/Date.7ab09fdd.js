import{D as n}from"./links.125d59c9.js";import{_ as a}from"./default-i18n.3881921e.js";import{t as e}from"./constants.238e5b7b.js";function r(o,t="yyyy-MM-dd HH:mm:ss"){return n.fromSQL(o,{zone:"utc"}).setZone(n.local().zoneName).toFormat(t)}function s(o){return n.fromSQL(o,{zone:"utc"}).setZone(n.local().zoneName).toRelative().replace("a few seconds ago",a("a few seconds ago",e)).replace("a minute ago",a("a minute ago",e)).replace("minutes ago",a("minutes ago",e)).replace("a day ago",a("a day ago",e)).replace("days ago",a("days ago",e)).replace("a month ago",a("a month ago",e)).replace("months ago",a("months ago",e)).replace("a year ago",a("a year ago",e)).replace("years ago",a("years ago",e))}function l(o,t="yyyy-MM-dd HH:mm:ss"){return o?n.fromJSDate(o).setZone(n.local().zoneName).toFormat(t):null}function c(o){return o?n.fromJSDate(new Date(o)).setZone(n.local().zoneName).toJSDate():null}const p={methods:{dateSqlToLocal:r,dateSqlToLocalRelative:s,dateJsToLocal:l,dateStringToLocalJs:c}};export{p as D};
