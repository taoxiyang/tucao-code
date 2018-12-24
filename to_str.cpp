#include <string>
using std::string;

const string& to_str(int type)
{
    switch (type) {
    case 0: return std::move("Internet");
    case 1: return std::move("ARPANET");
    case 2: return std::move("Whatever");
    default: /* unreachable */ abort();
    }
}
